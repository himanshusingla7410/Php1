<?php

use core\Session;

view('sessions/create.view.php',[
    'error' => Session::get('error')
]);

function urlIs($page){
    $_SERVER['REQUEST_URI'] === $page;
    
}
?>