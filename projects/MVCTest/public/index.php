<?php
    
    require_once "../bootstrap.php";


    if (isset($_SERVER['PATH_INFO'])){
        $path = $_SERVER['PATH_INFO'];
    } else {
        $path = "/home/index";
    }

    
    $params = explode("/", $path);
    
    $controllerName = $params[1];
    $action = $params[2];
    if (isset($params[3])){
        $id = $params[3];
    }
    
    $namespace = "App\\Controllers\\";
    $suffix = "Controller";
    $class = $namespace.$controllerName.$suffix;

    $controller = new $class();
    echo $controller->$action();

    
 //var_dum $_SERVER['REQUEST_URI'];



// REQUEST_URI: (string) "/public/produtos/promocao"
// REQUEST_METHOD: (string) "GET"
// SCRIPT_NAME: (string) "/public/index.php"
// PATH_INFO: (string) "/produtos/promocao"
// PHP_SELF: (string) "/public/index.php/produtos/promocao"