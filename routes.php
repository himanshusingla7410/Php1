<?php


$router->get('/', 'controller/index.php');
$router->get('/add', 'controller/add.php');
$router->get('/wishlist', 'controller/wishlist.php');

$router->get('/notes', 'controller/notes/index.php');
$router->get('/note', 'controller/notes/show.php');
$router->get('/note/edit', 'controller/notes/edit.php');

$router->get('/add-note', 'controller/notes/create.php');
$router->post('/notes', 'controller/notes/store.php');
$router->delete('/note', 'controller/notes/destroy.php');
$router->patch('/note', 'controller/notes/update.php');

$router->get('/register', 'controller/registeration/create.php');
$router->post('/register', 'controller/registeration/store.php');