<?php
    
    require_once "../bootstrap.php";

    $c = $_GET['c'];
    $a = $_GET['a'];

    $ns = "App\\Controllers\\";
    $sfx = "Controller";
    $class = $ns.$c.$sfx;

    $controller = new $class();
    $controller->$a();

    //var_dump($class);

    // use App\Controllers\ProdutosController;

    // $controller = new ProdutosController();

    // $controller->promocao();

