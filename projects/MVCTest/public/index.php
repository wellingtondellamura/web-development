<?php
    
    require_once "../bootstrap.php";

    use App\Models\Categoria;
    use App\Models\Produto;

    $c = new Categoria();
    $c->id = 1;
    $c->nome = "Laticínios";
    
    

    $p = new Produto();
    $p->nome = "Toddynho";
    $p->preco = "10.99";
    $p->foto = "toddynho.png";
    $p->categoria = $c;

    var_dump($p);

