<?php

use core\Authenticator;
use core\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];



$forms= LoginForm::validate($attributes=[
    'email' => $email,
    'password'=> $password
]);

$signedIn= (new Authenticator)->attempt($attributes['email'],$attributes['password']);


if (! $signedIn){ 

    $forms->errors('email', 'Credentials mismatch!')->throw();
    
}

redirect('/');




function urlIs($page){
    $_SERVER['REQUEST_URI'] === $page;
    
}


