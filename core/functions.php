<?php

use core\Response;
use core\Session;

const BASE_PATH = __DIR__ . '/../';


function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();

}

function abort($code){
    http_response_code($code);

    require base_path("view/{$code}.php");

    die();
}

function authorise($condition){

    if (! $condition){
        abort(Response::FORBIDDEN);
    };

}

function base_path($path){
    

    return BASE_PATH . $path;

}

function view($path, $attributes = []){

    extract($attributes);
    require base_path('view/'. $path );

}

function login($user){

    $_SESSION['user'] = [
        'email' => $user['email']
    ];

    session_regenerate_id();
}


function logout(){

    Session::destroy();

}


function redirect($path){

    header("Location: {$path}");
    exit();

}

function old($key,  $default =''){

    
    return Core\Session::get('old')[$key] ?? $default ;
}