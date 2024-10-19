<?php

use core\Database; 
use core\Validator; 

require base_path('core/Validator.php');
$config = require base_path('config.php');
$db = new Database($config['database']);


$error = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    

    if ( ! Validator::string($_POST['note'], 1, 10)){

        $error['body'] = ' A body should be equal or greater than 1 character';

    }


    if (empty($error)){

        $db->query('INSERT INTO notes (id, note, user_id) VALUES (:id, :note, :user_id)',[
            'id' => 4,
            'note' => $_POST['note'],
            'user_id' => 1,
        ]);
    
    }

    
}

function urlIs($page){
     $_SERVER['REQUEST_URI'] === $page;
     
}

view('notes/create.view.php',[
    'header' => 'Create New Note',
    'error' => $error
]);

?>