<?php

$header = 'Detailed Note';
$config = require 'config.php';
$db = new Database($config['database']);


$user = 1;
$note = $db->query('select * from notes where id = :id ', ['id'=> $_GET['id']])->FindOrAbort();


authorise($note['user_id'] === $user);





require 'view/notes/show.php';

function urlIs($page){
    return $_SERVER['REQUEST_URI'] === $page;
}

?>