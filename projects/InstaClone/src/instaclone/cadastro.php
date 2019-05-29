<?php
$email = $_POST['email'];
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$concordo = $_POST['concordo'];

$username = 'root';
$password = '';
try {
  $conn = new PDO('mysql:host=localhost;dbname=instaclone',
                  $username, $password);
  $sql = ' INSERT INTO usuarios(nome, email, usuario, senha) '.
         ' VALUES (:nome, :email, :usuario,:senha)' ;
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':usuario', $usuario);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':senha', $senha);
  $stmt->execute();
  echo 'Tudo certo';
}catch(PDOException $e) {
  echo 'Erro: ' . $e->getMessage();
}

?>
