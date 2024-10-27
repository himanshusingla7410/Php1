<?php
//require 'routes.php';
require 'functions.php';

// mysql data base connection
$dsn = "mysql:host=localhost;port=3306;dbname=php;charset=utf8";
$pdo = new PDO($dsn, 'root');

// sql query
$statement = $pdo -> prepare("select * from posts");

// sql executed the query
$statement -> execute();

$posts= $statement ->fetchall(PDO::FETCH_ASSOC);

foreach ($posts as $post){
    echo "<li>" . $post['title'] .  "</li>";
};





