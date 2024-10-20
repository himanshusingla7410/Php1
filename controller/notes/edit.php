<?php


use core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);


$user = 1;


$note = $db->query('select * from notes where id = :id ', ['id'=> $_GET['id']])->FindOrAbort();


authorise($note['user_id'] === $user);



view('notes/edit.view.php',[
    'header' => 'Edit Note',
    'error' => [],
    'note'=> $note    
]);



function urlIs($page){
    $_SERVER['REQUEST_URI'] === $page;
    
}

?>