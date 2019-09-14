<?php
    $params = App\Flash::get('params');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">       
        <title>Produtos em Promoção</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <h1>Produtos em Promoção</h1>
        <div class="text-right">
            <a class="btn btn-primary btn-lg "  href="#">Adicionar</a>
        </div>

        <table class="table table-striped table-sm">
            <thead  class="thead-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Foto</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php foreach ($params as $produto) { ?>
                    <tr>
                        <td><?=$produto->id?></td>
                        <td><?=$produto->nome?></td>
                        <td><?=$produto->preco?></td>
                        <td><?=$produto->foto?></td>
                        <td>
                            <a  class="btn btn-success btn-sm" href="#">Alterar</a>
                            <a  class="btn btn-danger btn-sm" href="#">Remover</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </body>
</html>