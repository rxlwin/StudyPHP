<?php  
  try{
      $dsn = "mysql:host=mysql;port=3306;dbname=test";
      $pdo = new PDO($dsn,'root','123456');
      $pdo->query("SET NAMES utf8mb4");
      $result = $pdo->query('select * from test');
      echo '<pre>';
      var_dump($result->fetchAll());
  } catch (PDOException $e) {
      echo $e->getMessage();
  }