<?php


logout();

header('location: /login');
exit();



function urlIs($page){
    $_SERVER['REQUEST_URI'] === $page;
    
}
?>