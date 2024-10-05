<?php

/* 

CREATED DATABASE CLASS

class Database{
    public $connection;

    public function __construct()
    {
        
        $dsn = "mysql:host=localhost;port=3306;dbname=php;user=root;charset=utf8";
        $this->connection = new PDO($dsn);
    }

    public function query($query){
        // sql query
        $statement = $this->connection-> prepare($query);

        // sql executed the query
        $statement -> execute();

        return $statement; 
    }

}

CHANGES DONE AT INDEX FILE

<?php
//require 'routes.php';
require 'functions.php';
require 'Database.php';


$db = new Database();

$posts = $db->query("select * from posts") -> fetchAll(PDO::FETCH_ASSOC);

dd($posts);


*/