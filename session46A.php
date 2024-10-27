<?php

use core\Authenticator;
use core\LoginForm;
use core\Session;


$email = $_POST['email'];
$password = $_POST['password'];

$forms= LoginForm::validate($attributes=[ // As we are returning instance at validate method so we can store it in forms variable for error
    'email' => $email,
    'password'=> $password
]);


if ((new Authenticator)->attempt($attributes['email'],$attributes['password'])){ // can use $auth = new Authenticator and then          $auth->attempt()

    redirect('/');

} else {

    $forms->errors('email', 'Credentials mismatch!');

}

Session::flash('error', $forms->error());
Session::flash('old', [
    'email' => $email
]);


 /*

 ------ CHANGES IN CLASS--------

class LoginForm{

    protected $error =[];

    public function __construct($attributes) // making constructor as base function of class is to validate and whenever this class is called validation should happen. Moreover we can directly use this { LoginForm::validate() } in other files instead of writing whole validation code again. LoginForm will do validation and then call method. 
    {   
        if ( ! Validator::email($attributes['email'])){

            $this ->error['email'] = 'Please enter a valid email.';

        }


        if (! Validator::string($attributes['password'], 4, 100)){

            $this ->error['password'] = 'Please provide a valid password';

        }
    }

    public static function validate($attributes){      // making validate static function so that we call it like LoginForm::validate().

        $instance = new static ($attributes);

        if ($instance->failed()){
            throw new ValidationException();
        }
        
        return $instance;

    }

    public function failed(){

        return count($this->error); 
        
        // The failed() method checks the number of items in $this->error. If $this->error contains any elements, count() will return a positive integer, which is treated as true in the if condition in the validate() method. This means that the presence of any error triggers a ValidationException. If $this->error is empty, count() returns 0, which is treated as false, indicating that there are no validation errors.

    }



*/



