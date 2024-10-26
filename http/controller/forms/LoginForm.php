<?php



namespace http\forms;
namespace core;


class LoginForm{

    protected $error =[];

    public function validate($email, $password){

        //$error = [];


        if ( ! Validator::email($_POST['email'])){

            $this ->error['email'] = 'Please enter a valid email.';

        }


        if (! Validator::string($password)){

            $this ->error['password'] = 'Please provide a valid password';

        }


        return empty($this ->error);

            
    }


    public function error(){

        return $this -> error;

    }

}
