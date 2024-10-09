<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();

}

function abort($code){
    http_response_code($code);

    require "view/{$code}.php";

    die();
}

function authorise($condition){

    if (! $condition){
        abort(Response::FORBIDDEN);
    };

}

