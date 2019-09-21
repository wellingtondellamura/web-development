<?php

    namespace App\Repositories;

class ProdutoRepository 
{

    private $connection;

    function __construct()
    {
        $connection = Database::getConnection();
    }

    public function create($produto)
    {
        $sql = "INSERT INTO produtos(nome, preco, foto) VALUES (:nome, :preco, :foto)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':nome', $produto->nome);
        $stmt->bindParam(':preco', $produto->preco);
        $stmt->bindParam(':foto', $produto->foto);
        if ($stmt->execute()){
            //log
          return true;
        } else {
          return false;
        }
    }

    public function read($id){
        //fazer um select where id = $id
        //criar um objeto produto
        //preencher o produto com o banco
    }

    public function all()  //map/filter/reduce
    {
        //fazer um select *
        //fazer um loop em todos os elementos  (array_map);
        // criar um produto para cada elemento e preenchê-lo com a linha
        //retornar uma lista de produtos 
    }

    public function update($produto)
    {
        //criar o sql de update e enviar ao banco
    }

    public function delete($id)
    {
        //fazer um sql delete where id = $id
    }

}
