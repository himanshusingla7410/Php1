<?php

$header = 'Create New Note';

$config = require 'config.php';
$db = new Database($config['database']);





if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $error = [];

    if (strlen($_POST['note']) === 0){

        $error['body'] = ' A body missing';

    }

    if (empty($error)){

        $db->query('INSERT INTO notes (id, note, user_id) VALUES (:id, :note, :user_id)',[
            'id' => 3,
            'note' => $_POST['note'],
            'user_id' => 1,
        ]);
    
    }

    
}

function urlIs($page){
     $_SERVER['REQUEST_URI'] === $page;
     
}

require 'view/add_note.view.php';

?>