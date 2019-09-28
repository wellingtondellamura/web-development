<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Minha lista de produtos</h1>

    <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>descrição</th>
            <th>valor</th>
            <th>detalhes</th>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{$produto->id}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->valor}}</td>
                <td>{{$produto->detalhes}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
