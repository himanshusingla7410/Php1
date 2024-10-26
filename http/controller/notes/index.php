<?php

use core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);


$notes = $db->query("select * from notes where user_id = 1")->get();


view('notes/index.view.php', [
    'header' => 'My Notes',
    'notes' => $notes
]);


function urlIs($page){
    return $_SERVER['REQUEST_URI'] === $page;
}

?>