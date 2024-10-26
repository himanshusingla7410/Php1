<?php



namespace http\forms;
namespace core;


class LoginForm{

    protected $error =[];

    public function validate($email, $password){

        if ( ! Validator::email($email)){

            $this ->error['email'] = 'Please enter a valid email.';

        }


        if (! Validator::string($password, 4, 100)){

            $this ->error['password'] = 'Please provide a valid password';

        }

        return empty($this ->error);

    }


    public function error(){

        return $this -> error;

    }

    public function errors($field, $message){

        $this->error[$field] = $message;

    }

}
