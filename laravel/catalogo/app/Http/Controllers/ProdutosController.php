<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
class ProdutosController extends Controller
{
    public function index()
    {
       $produtos =  Produto::where('valor','>=','1')->get();
       return view('produtos.listar', compact('produtos'));
    }

    public function gravar(Request $request)
    {
        $request->flash();//permite o funcionamento do {{old}}

        $request->validate([
            'descricao' => 'required',
            'valor' => 'required',
            'detalhes' => 'required',
            'foto' => 'nullable',
        ]);

        $data = $request->all();
        //dd($data);

        // $p = new Produto();
        // $p->descricao = $data['descricao'];
        // $p->valor = $data['valor'];
        // $p->detalhes = $data['detalhes'];
        // $p->foto = $data['foto'];
        // $p->save();

        $p = Produto::create($data);
        //dd($p);
        return redirect('/produtos');
    }

    public function remover($id, Request $request){
        $produto = Produto::find($id);
        if (!isset($produto))
        {

        }
        $produto->delete();
        return redirect('/produtos');
    }
}
