<?php
function getConnection() {
  $username = 'root';
  $password = '';
  $conn = new PDO('mysql:host=localhost;dbname=instaclone',  $username, $password);
  return $conn;
}

 ?>
