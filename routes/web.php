<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', function ()
{
    return view('register');
});

Route::get('/go_to_verification_page', function ()
{
    return view('validation_email');
});

Route::post('register_with_email',
    [
        'uses' => 'RegistrationSystemController@register_user_to_system',
        'as' => 'register_with_email',
    ]);

Route::post('generated_verification_code_to_email',
    [
        'uses' => 'RegistrationSystemController@get_verification_code_to_email',
        'as' => 'generated_verification_code_to_email',
    ]);

Route::post('validate_from_email_use_code',
    [
        'uses' => 'RegistrationSystemController@validation_to_continue',
        'as' => 'validate_from_email_use_code',
    ]);

Route::get('/go_to_login_page', function ()
{
    return view('log_in');
});

Route::post('user_log_in',
[
    'uses' => 'RegistrationSystemController@user_login_trial',
    'as' => 'user_log_in',
]);

Route::get('/success', function ()
{
    return view('success_page');
});


