<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class RegistrationSystemController extends Controller
{
   public function register_user_to_system(Request $request)
   {
       $endpoint = 'https://api.baseplate.appetiserdev.tech/api/v1/auth/register';
       $client = new Client();

       try
       {
           $registerAccountReq = $client->post($endpoint , [
                   'headers' => [
                       'Accept' => 'application/json',
                       'Content-Type' => 'application/json',
                   ],
                   'json' => [
                       'email' => $request->email,
                       'full_name' => $request->full_name,
                       'password' => $request->password,
                       'password_confirmation' => $request->confirm_password,
                   ],
               ]
           );

           $responseGood =  json_decode($registerAccountReq->getBody(), true);

           $getBearerToken = $responseGood{'data'}{'access_token'};

           return ['success', $getBearerToken];
       }
       catch(GuzzleException $exception)
       {
           $responseBody = $exception->getResponse()->getBody(true);

           return $responseBody;
       }
   }

   public function get_verification_code_to_email(Request $request)
   {
       $bearer = $request->bearer_tok;
       $sendTo = $request->recipient;

       $verification_code = base64_encode($bearer. '|--|--|' . 'VERIFY-ME-REGISTRATION') ;

       $toSendDetails =
           [
               'verification_code' => $verification_code,
           ];

       Mail::send('mail_send_to_email', $toSendDetails, function($message1) use ($sendTo)
       {
           $message1
               ->to([$sendTo])
               ->subject('User Registration Verification Code');
           $message1
               ->from('appertissers_app_floyd_challenge@test.com','Coding Challenge(Appetisers App)');
       });

       DB::table('users_verification_code')
           ->insert
           ([
               'user_access_token' => $bearer,
               'verification_code' => $verification_code,
               'check_verify' => false,
               'created_at' => Carbon::now('Asia/Manila')
           ]);
   }

   public function validation_to_continue(Request $request)
   {
       $decodeToken = base64_decode($request->validate_code);

       $getValues = explode('|--|--|', $decodeToken);

       $countValids = DB::table('users_verification_code')
           ->where('user_access_token', $getValues[0])
           ->where('verification_code', $request->validate_code)
           ->count();

       if($countValids > 0)
       {
           DB::table('users_verification_code')
               ->where('user_access_token', $getValues[0])
               ->where('verification_code', $request->validate_code)
               ->update
               ([
                   'check_verify' => true
               ]);
       }

       return $countValids;
   }

   public function user_login_trial(Request $request)
   {
       $endpoint = 'https://api.baseplate.appetiserdev.tech/api/v1/auth/login';
       $client = new Client();

       try
       {
           $logInRequest = $client->post($endpoint , [
                   'headers' => [
                       'Accept' => 'application/json',
                       'Content-Type' => 'application/json',
                   ],
                   'json' => [
                       'username' => $request->email_add,
                       'password' => $request->pass,
                   ],
               ]
           );

           $responseLogin =  json_decode($logInRequest->getBody(), true);

           $getResponseHTTP = $responseLogin{'http_status'};

           return $getResponseHTTP;
       }
       catch(GuzzleException $exception)
       {
           $responseBody = $exception->getResponse()->getBody(true);

           return $responseBody;
       }
   }
}
