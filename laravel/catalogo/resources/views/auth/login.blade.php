@extends('layout.master')

@section('title','Acesso Restrito')

@section('content')
    <form method="post" action="/authenticate">
    @csrf
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" name="email" value="{{ old('email') }}"/>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" name="password" value="{{ old('password') }}"/>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    {{-- @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <div>
        <input type="submit" class="btn btn-primary" value="Entrar"/>
        <a href="/register" class="btn btn-danger">Cadastrar-se</a>
    </div>
    </form>
@endsection
