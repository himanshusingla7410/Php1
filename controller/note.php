<?php

$header = 'Detailed Note';


$config = require 'config.php';
$db = new Database($config['database']);


$note = $db->query('select * from notes where id = :id ', ['id'=> $_GET['id']])-> fetch();



require 'view/note.view.php';


function urlIs($page){
    return $_SERVER['REQUEST_URI'] === $page;
}

?>