<?php

namespace core;

use core\Database;

class Authenticator{
    
    protected $db;
    protected $config;
    
    public function __construct()       
    {
        $this->config = require base_path('config.php');
        $this->db = new Database($this->config['database']);

    }

    public function attempt($email, $password){

        $user = $this->db->query( 'select * from users where email = :email',[
            'email' => $_POST['email']
        ])->find();
        
        
        if ($user){
    
            if (password_verify($password, $user['password'])){
            
                login([
                    'email' => $email
                ]);
            
                return true;
            }
               
        } 

        return false;
    } 

    




}