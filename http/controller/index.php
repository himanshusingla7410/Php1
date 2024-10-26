<?php



view('index.view.php',[
    'header' => 'Library'
]);



function urlIs($page){
    return $_SERVER['REQUEST_URI'] === $page;
}


?>