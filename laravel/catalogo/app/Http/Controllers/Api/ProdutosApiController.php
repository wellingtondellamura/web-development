<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Http\Response;

class ProdutosApiController extends Controller
{
    public function listar(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }
}
