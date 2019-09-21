<?php
    $params = App\Flash::get('params');
?>

<div class="text-right">
    <a class="btn btn-primary btn-lg "  href="#">Adicionar</a>
</div>
<br/>
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