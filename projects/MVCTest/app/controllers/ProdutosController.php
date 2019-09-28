<?php

namespace App\Controllers;

use App\Models\Produto;
use App\Controllers\BaseController;

class ProdutosController extends BaseController{

    public function promocao(){
        $list = [
            new Produto("Conquista Guaraná", 3.99, "consquista.jpg"),
            new Produto("Guaraná Antarctica", 3.29, "antarctica.jpg"),
            new Produto("Gasosa Paranaense", 8.55, "gasosa.jpg"),
            new Produto("Pepsi Twist", 1.99, "pepsi.jpg")
        ];
        
        return $this->response("produtos/promocao", 
                                "Produtos em Promoção",$list);
    }

    public function index(){

    }

    public function criar(){
        return "Criar Produto";
    }

}