<?php

namespace Alura\Pdo\Repository;

use Alura\Pdo\Domain\Model\Student;

interface StudentRepository
{
  public function allStudents(): array;
  public function studentsBirthAt(\DateTimeImmutable $birthDate): array;
  public function create(Student $newStudent): bool;
  public function delete(Student $newStudent): bool;
}
