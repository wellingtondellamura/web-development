<?php
    $params = App\Flash::get('params');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">       
        <title>Produtos em Promoção</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="centerPanel">
        <h1>Produtos em Promoção</h1>
        <table id="data">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Foto</th>
            </thead>
            <tbody>
                <?php foreach ($params as $produto) { ?>
                    <tr>
                        <td><?=$produto->id?></td>
                        <td><?=$produto->nome?></td>
                        <td><?=$produto->preco?></td>
                        <td><?=$produto->foto?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </body>
</html>