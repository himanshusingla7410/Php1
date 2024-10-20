<?php

$email = $_POST['email'];
$password = $_POST['password'];



use core\Database; 
use core\Validator; 

require base_path('core/Validator.php');
$config = require base_path('config.php');
$db = new Database($config['database']);


$error = [];
    

if ( ! Validator::email($_POST['email'])){

    $error['email'] = 'Please enter a valid email.';

}


if ( ! Validator::string($_POST['password'], 7, 100)){

    $error['password'] = ' A password should be greater than 4 character.';

}

$user = $db->query( 'select * from users where email = :email',[
    'email' => $_POST['email']
])->find();


if (! empty($error)){

    return view('registeration/create.view.php',[
            'error' => $error
        ]);

}


if ($user){

    //head to login page as we already have a user
    
    header('Location: /add');
    exit();

} else{

    $db->query('INSERT INTO users (id, email, password) VALUES (:id, :email, :password)',[
        'id' => 4,
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ]);

    header('Location: /');
    exit();

}

$_SESSION['user']= [
    'email'=> $email
];


function urlIs($page){
    $_SERVER['REQUEST_URI'] === $page;
    
}


