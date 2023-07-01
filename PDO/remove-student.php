<?php

use Alura\Pdo\Infraestructure\Persistence\Connection;

require_once 'vendor/autoload.php';

$pdo = Connection::createConnection();

$preparedStatement = $pdo->prepare("DELETE FROM students WHERE id = :id;");
$preparedStatement->bindValue(':id', 2, PDO::PARAM_INT);
var_dump($preparedStatement->execute());
