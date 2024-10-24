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


if (! empty($error)){

    return view('sessions/create.view.php',[
            'error' => $error
        ]);

}

$user = $db->query( 'select * from users where email = :email',[
    'email' => $_POST['email']
])->find();


if (! $user){

    return view('sessions/create.view.php',[
        'error' => [
            'email'=> 'No user found!'
        ]
    ]);

}


if (password_verify($password, $user['password'])){
    
    login([
        'email' => $email
    ]);


    header('Location: /');
    exit();
} 



return view('sessions/create.view.php',[
    'error' => [
        'email'=> 'Password incorrect!'
    ]
]);


if ($user){
    
    login([
        'email' => $email
    ]);

      
    header('Location: /');
    exit();

} 





function urlIs($page){
    $_SERVER['REQUEST_URI'] === $page;
    
}


