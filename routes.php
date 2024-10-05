<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
 
 
$routes = [
    '/' => 'controller/index.php',
    '/add' => 'controller/add.php',
    '/wishlist' => 'controller/wishlist.php',
];
 
 
if (array_key_exists($uri,$routes)){
    require $routes[$uri];
 
} else{
    http_response_code(404);
    echo 'Sorry page not found!';

};
 

?>