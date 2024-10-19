<?php

 
$routes = [
    '/' => 'controller/index.php',
    '/add' => 'controller/add.php',
    '/notes' => 'controller/notes/index.php',
    '/note' => 'controller/notes/show.php',
    '/wishlist' => 'controller/wishlist.php',
    '/add-note' => 'controller/notes/create.php',
    
];

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
 
if (array_key_exists($uri,$routes)){
    require base_path($routes[$uri]);
 
} else{
    http_response_code(404);
    echo 'Sorry page not found!';

};
 

?>