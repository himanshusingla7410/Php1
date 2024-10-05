<?php

class Database{
    public $connection;

    public function __construct($config, $username = 'root', $password= '')
    {
    
        $dsn = 'mysql:'. http_build_query($config, '', ';');

        $dsn = "mysql:host=localhost;port=3306;dbname=php;user=root;charset=utf8";

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }

    public function query($query, $params=[]){
        // sql query
        $statement = $this->connection-> prepare($query);

        // sql executed the query
        $statement -> execute($params);

        return $statement; 
    }

}