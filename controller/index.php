<?php

$header = "Library";
require 'view/index.view.php';



function urlIs($page){
    return $_SERVER['REQUEST_URI'] === $page;
}

?>