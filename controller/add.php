<?php

$header = 'Add Book To Library';
require 'view/add.view.php';


function urlIs($page){
    return $_SERVER['REQUEST_URI'] === $page;
}

?>