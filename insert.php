<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'insert into produtos(descricao) value(?)';
// $sql = 'insert into produtos(id, descricao) value(?, ?)';

// mecanismo de segurança MySQL Injection
$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['descricao']);
// $prepare->bindParam(2, $_GET['id']);
$prepare->execute();

// exibe a quantidade de linhas afetadas
echo $prepare->rowCount();