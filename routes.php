<?php


$router->get('/', 'controller/index.php');
$router->get('/add', 'controller/add.php');
$router->get('/wishlist', 'controller/wishlist.php');

$router->get('/notes', 'controller/notes/index.php');
$router->get('/note', 'controller/notes/show.php');

$router->get('/add-note', 'controller/notes/create.php');
$router->post('/notes', 'controller/notes/store.php');
$router->delete('/note', 'controller/notes/destroy.php');