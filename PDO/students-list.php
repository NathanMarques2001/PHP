<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\Connection;

require_once 'vendor/autoload.php';

$pdo = Connection::createConnection();

$sql = "SELECT * FROM students";

$statement = $pdo->query($sql);
$studentsData = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentsList = [];

foreach ($studentsData as $student) {
  $studentsList[] = new Student($student['id'], $student['name'], new \DateTimeImmutable($student['birth_date']));
}

var_dump($studentsList);
