<?php

    require_once "../app/models/Produto.php";
    
    use App\Models\Produto;

    $p = new Produto();
    $p->nome = "Toddynho";
    $p->preco = "10.99";
    $p->foto = "toddynho.png";
    $p->estoque = 10;
    
    var_dump($p);

