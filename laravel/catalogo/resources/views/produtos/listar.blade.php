@extends('layout.master')

@section('title','Lista de Produtos')

@section('content')
    <div class="row">
        <div class=" col-12 text-right" style="margin-bottom: 15px;">
                <a href="/produtos/adicionar" class="btn btn-primary">Adicionar</a>
        </div>

    </div>
    <table class="table table-striped table-sm">
        <thead>
            <th>id</th>
            <th>descrição</th>
            <th>valor</th>

            <th>ações</th>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{$produto->id}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->valor}}</td>
                <td>
                    <a class="btn btn-sm btn-secondary" href="#">Alterar</a>
                    <a class="btn btn-sm btn-info" href="#">Visualizar</a>
                        <a class="btn btn-sm btn-danger" href="/produtos/remover/{{$produto->id}}">Remover</a>


                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
 @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
