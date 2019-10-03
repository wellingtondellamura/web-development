<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastro de produtos</h1>
    <form method="post" action="/produtos">
    @csrf
    <div>
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" value="{{ old('descricao') }}"/>
        @error('descricao')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="valor">Valor (R$)</label>
        <input type="text" name="valor" value="{{ old('valor') }}"/>
    </div>
    <div>
        <label for="detalhes">Detalhes</label>
        <input type="text" name="detalhes" value="{{ old('detalhes') }}"/>
    </div>
    <div>
        <label for="foto">Foto</label>
        <input type="text" name="foto" value="{{ old('foto') }}"/>
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
        <input type="submit" value="OK"/>
    </div>
    </form>
    
</body>
</html>
