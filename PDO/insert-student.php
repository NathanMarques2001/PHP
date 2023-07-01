<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\Connection;

require_once 'vendor/autoload.php';

$pdo = Connection::createConnection();

$student = new Student(
  null,
  "Nathan Marques', ''); DROP TABLE students; SQL INJECTION",
  new \DateTimeImmutable('2001-11-11')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

if ($statement->execute()) {
  echo "Aluno incluído!";
}
