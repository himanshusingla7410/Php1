<?php

$header = 'Create New Note';

$config = require 'config.php';
$db = new Database($config['database']);





if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $db->query("Insert into notes (id= :id, note= :note, user_id= :user_id) Values (:id, :note, :user_id)",[
        'id' => 6,
        'note' => $_POST['note'],
        'user_id' => 1,
    ]);

}

function urlIs($page){
     $_SERVER['REQUEST_URI'] === $page;
     
}

require 'view/add_note.view.php';

?>