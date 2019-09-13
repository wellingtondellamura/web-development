<?php

namespace App\Controllers;

use App\Models\Categoria;

class CategoriasController{

    public function listar(){
        $list = [
            new Categoria(1, "Refrigerantes"),
            new Categoria(2, "Cervejas"),
        ];
        var_dump($list);
    }

}