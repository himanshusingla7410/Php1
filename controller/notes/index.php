<?php

$header = 'My Notes';


$config = require 'config.php';
$db = new Database($config['database']);


$notes = $db->query("select * from notes where user_id = 1")->get();


require 'view/notes/index.php';


function urlIs($page){
    return $_SERVER['REQUEST_URI'] === $page;
}

?>