<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\Connection;
use Alura\Pdo\Infraestructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = Connection::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

try {
  $student1 = new Student(
    null,
    'John Doe',
    new DateTimeImmutable('1990-01-01')
  );
  $studentRepository->save($student1);

  $student2 = new Student(
    null,
    'Ana Luiza',
    new DateTimeImmutable('1994-04-21')
  );
  $studentRepository->save($student2);

  $connection->commit();
} catch (\RuntimeException $e) {
  echo $e->getMessage();
  $connection->rollBack();
}
