<?php


view('notes/create.view.php',[
    'header' => 'Create New Note',
    'error' => []
]);


function urlIs($page){
    $_SERVER['REQUEST_URI'] === $page;
    
}
?>