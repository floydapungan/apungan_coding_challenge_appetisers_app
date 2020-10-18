# Simple Registration System
Coding exam for Web Developer position

## Table of contents
* [General info](#general-info)
* [Technologies](#technologies)
* [Setup](#setup)

## General info
Lets the user register and log-in an account with email verification after registration.
	
## Technologies
Project is created with:
* Laravel 5
* Material Design For Bootstrap 4
* JQuery 3.5.1
* Guzzle HTTP
* Asynchronous JavaScript and XML
	
## How to build project
To build this project, 

* Download Composer at https://getcomposer.org/download/

* After downloading, download the Laravel installer using Composer at designated path:

```
composer global require laravel/installer
```

* Create a laravel using:
```
composer create-project laravel/laravel apungan_registration_system
```
* Install using your termnal; Guzzle HTTP : 
```
composer require guzzlehttp/guzzle
```

* Create at localhost MySQL table using XAMMP(phpmyadmin) or any MySQL workbench

 -Database name: appetisers_coding_challenge

* Change the database values in .env file 

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=appetisers_coding_challenge
DB_USERNAME=root
DB_PASSWORD=
```

* Modify the mail .env file 

```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=floydapungs04@gmail.com
MAIL_PASSWORD=netflixAcct04
MAIL_ENCRYPTION=tls
```
* Under /config/mail.php, change the value of array key "smtp" to:

```
'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.googlemail.com'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'auth_mode' => null,
        ],
```

* Copy 2020_10_18_051333_create_users_verification_code_table under 'database/migrations' folder, migrate the migration using:

```
php artisan migrate
```

* Inside the folder resources/views, copy/create file namely:

  *additional_props.blade.php
  *footerplugins.blade.php
  *headerplugins.blade.php
  *log_in.blade.php
  *mail_send_to_email.blade.php
  *register.blade.php
  *success_page_blade.php
  *validation_email.blade.php

* Copy the file or use terminal and copy paste the code under it to create controller under app/Http/Controllers
```
php artisan make:controller RegistrationSystemController
```

* Under /public, add 'js' in folder

* Copy the 'registration_system.js' under '/public/js' folder;

* Copy all the codes from 'routes/web.php' 

* You can create a virtual host by pointing it to C://xampp/htdocs/apungan_registration_system/public.

* After all the said above are done, access the project using 'localhost/register'


## Author : John Floyd Apungan










