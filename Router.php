<?php
class Router{
    protected static $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public static function get($uri, $callback){
        self::$routes['GET'][$uri] = $callback;
    }
    public static function post($uri, $callback){
        self::$routes['POST'][$uri] = $callback;
    }

    public static function dispatch(){
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

       if(isset(self::$routes[$method][$uri])){
        $callback = self::$routes[$method][$uri];
        $callback();
       } else {
        http_response_code(404);
        echo "404 Not found";
       }
    }
}
