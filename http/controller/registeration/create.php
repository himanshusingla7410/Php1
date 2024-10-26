<?php

view('registeration/create.view.php');

function urlIs($page){
    $_SERVER['REQUEST_URI'] === $page;
    
}
?>