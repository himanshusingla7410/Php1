<?php

use core\Database; 
use core\Validator; 

require base_path('core/Validator.php');
$config = require base_path('config.php');
$db = new Database($config['database']);


$error = [];
$user = 1;  

if ( ! Validator::string($_POST['note'], 1, 50)){

    $error['body'] = ' A body should be equal or greater than 1 character';

}



$note = $db->query('select * from notes where id = :id ', ['id'=> $_POST['id']])->FindOrAbort();


authorise($note['user_id'] === $user);



if (! empty($error)){

    return view('notes/edit.view.php',[
            'header' => 'Edit Note',
            'error' => $error,
            'note'=> $note
        ]);

}



if (empty($error)){

    $db->query('UPDATE notes SET note = :note WHERE id = :id',[
        'id' => $_POST['id'],
        'note' => $_POST['note'],
        
    ]);

    header('Location: /notes');
    exit();

}





function urlIs($page){
    $_SERVER['REQUEST_URI'] === $page;
    
}


