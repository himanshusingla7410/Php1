<?php

//$header = "Wishlist";
view('wishlist.view.php',[
    'header' => 'Wishlist'
]);



function urlIs($page){
    return $_SERVER['REQUEST_URI'] === $page;
}

?>

