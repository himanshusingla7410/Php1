<?php


$router->get('/', 'index.php');
$router->get('/add', 'add.php');
$router->get('/wishlist', 'wishlist.php');

$router->get('/notes', 'notes/index.php')->only('auth');
$router->get('/note', 'notes/show.php');
$router->get('/note/edit', 'notes/edit.php');

$router->get('/add-note', 'notes/create.php');
$router->post('/notes', 'notes/store.php');
$router->delete('/note', 'notes/destroy.php');
$router->patch('/note', 'notes/update.php');

$router->get('/register', 'registeration/create.php')->only('guest');    
$router->post('/register', 'registeration/store.php');

$router->get('/login', 'sessions/create.php')->only('guest');    
$router->post('/session', 'sessions/store.php');

$router->get('/logout', 'sessions/destroy.php');