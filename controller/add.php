<?php

//$header = 'Add Book To Library';
view('add.view.php',[
    'header' => 'Add Book To Library'
]);


function urlIs($page){
    return $_SERVER['REQUEST_URI'] === $page;
}

?>