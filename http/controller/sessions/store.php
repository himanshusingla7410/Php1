<?php


$email = $_POST['email'];
$password = $_POST['password'];

use core\Authenticator;
use core\LoginForm;
use core\Session;


$forms = new LoginForm();

if ($forms->validate($email, $password)){

    $auth = new Authenticator;

    if ($auth->attempt($email,$password)){ // can replace auth with new authenticator directly for more clean up

        redirect('/');

    } else {

        $forms->errors('email', 'Credentials mismatch!');

    }

}


Session::flash('error', $forms->error());

return redirect('/login');










function urlIs($page){
    $_SERVER['REQUEST_URI'] === $page;
    
}


