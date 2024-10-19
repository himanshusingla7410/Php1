<?php

use core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);


$user = 1;


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $note = $db->query('select * from notes where id = :id ', ['id'=> $_GET['id']])->FindOrAbort();

    authorise($note['user_id'] === $user);


    $db->query('delete from notes where id = :id',['id'=> $_GET['id']]);

    
    header("Location: /notes");
    exit();

    
} else {

    $note = $db->query('select * from notes where id = :id ', ['id'=> $_GET['id']])->FindOrAbort();


    authorise($note['user_id'] === $user);


    view('notes/show.view.php', [
        'header' => 'Detailed Note',
        'note' => $note
    ]);

}


function urlIs($page){
    return $_SERVER['REQUEST_URI'] === $page;
}

?>