@extends('layout.master')

@section('title','Cadastro de Produtos')

@section('content')
    <form method="post" action="/produtos">
    @csrf
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" value="{{ old('descricao') }}"/>
        @error('descricao')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="valor">Valor (R$)</label>
        <input type="text" class="form-control" name="valor" value="{{ old('valor') }}"/>
    </div>
    <div class="form-group">
        <label for="detalhes">Detalhes</label>
        <input type="text" class="form-control" name="detalhes" value="{{ old('detalhes') }}"/>
    </div>
    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="text" class="form-control" name="foto" value="{{ old('foto') }}"/>
    </div>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <input type="submit" class="btn btn-primary" value="Confirmar"/>
        <a href="/produtos" class="btn btn-danger">Voltar</a>
    </div>
    </form>
@endsection
