<?php

namespace core;
 
// $routes = [
//     '/' => 'controller/index.php',
//     '/add' => 'controller/add.php',
//     '/notes' => 'controller/notes/index.php',
//     '/note' => 'controller/notes/show.php',
//     '/wishlist' => 'controller/wishlist.php',
//     '/add-note' => 'controller/notes/create.php',
    
// ];


class Router{

    protected $routes =[];

    public function add($uri, $controller,  $method){

        $this->routes[]=[
            'uri'=> $uri,
            'controller'=> $controller,
            'method'=> $method,
        ];


    }

    public function get($uri, $controller){

        $this->add($uri, $controller, 'GET');

    }

    public function post($uri, $controller){

        $this->add($uri, $controller, 'POST');

    }

    public function delete($uri, $controller){

        $this->add($uri, $controller, 'DELETE');

    }


    public function patch($uri, $controller){

        $this->add($uri, $controller, 'PATCH');

    }

    public function put($uri, $controller){

        $this->add($uri, $controller, 'PUT');

    }

    public function route($uri, $method){

        foreach( $this-> routes as $route){

            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)){
                return require base_path($route['controller']);
            }
        }

        $this->abort();

    }


    protected function abort($code=404){
        http_response_code($code);

        require base_path("view/{$code}.php");

        die();
    }


}



    





// $routes = require base_path('routes.php');

// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
 
// if (array_key_exists($uri,$routes)){
//     require base_path($routes[$uri]);
 
// } else{
//     http_response_code(404);
//     echo 'Sorry page not found!';
    
// };
 

?>