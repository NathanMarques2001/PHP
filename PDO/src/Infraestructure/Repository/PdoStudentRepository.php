<?php

namespace Alura\Pdo\Infraestructure\Repository;

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Repository\StudentRepository;
use PDO;
use PDOStatement;

class PdoStudentRepository implements StudentRepository
{

  private PDO $connection;

  public function __construct(PDO $connection)
  {
    $this->connection = $connection;
  }

  public function allStudents(): array
  {
    $statement = $this->connection->query("SELECT * FROM students");

    return $this->hydrateStudentList($statement);
  }

  public function studentsBirthAt(\DateTimeImmutable $birthDate): array
  {
    $query = "SELECT * FROM students WHERE birth_date = :birthDate";
    $statement = $this->connection->prepare($query);
    $statement->bindValue(':birthDate', $birthDate->format('Y-m-d'));
    $statement->execute();

    return $this->hydrateStudentList($statement);
  }

  private function hydrateStudentList(PDOStatement $stmt): array
  {
    $studentsDataList = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $studentList = [];

    foreach ($studentsDataList as $studentData) {
      $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
      );
    }

    return $studentList;
  }

  public function save(Student $student): bool
  {
    if ($student->id() === null) {
      return $this->create($student);
    }

    return $this->update($student);
  }

  public function create(Student $newStudent): bool
  {
    $sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
    $statement = $this->connection->prepare($sqlInsert);
    $statement->bindValue(':name', $newStudent->name());
    $statement->bindValue(':birth_date', $newStudent->birthDate()->format('Y-m-d'));

    if ($statement === false) {
      throw new \RuntimeException($this->connection->errorInfo()[2]);
    }

    return $statement->execute();
  }

  public function update(Student $student): bool
  {
    $sqlUpdate = "UPDATE students SET name = :name, birth_date = :birth_date WHERE id = :id);";
    $statement = $this->connection->prepare($sqlUpdate);
    $statement->bindValue(':name', $student->name());
    $statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));
    $statement->bindValue(':id', $student->id(), PDO::PARAM_INT);

    return $statement->execute();
  }

  public function delete(Student $newStudent): bool
  {
    $preparedStatement = $this->connection->prepare("DELETE FROM students WHERE id = :id;");
    $preparedStatement->bindValue(':id', $newStudent->id(), PDO::PARAM_INT);

    return $preparedStatement->execute();
  }
}
