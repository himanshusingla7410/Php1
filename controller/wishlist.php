<?php

$header = "Wishlist";
require 'view/wishlist.view.php';



function urlIs($page){
    return $_SERVER['REQUEST_URI'] === $page;
}

?>

