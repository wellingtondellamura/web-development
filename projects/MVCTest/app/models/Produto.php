<?php

namespace App\Models;

class Produto {

    public static $COUNTER = 1;

    public $id;
    public $nome;
    public $preco;
    public $foto;

    function __construct($nome="", $preco = 0, $foto="")
    {
        $this->id = Produto::$COUNTER++;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->foto = $foto;
    }

}

