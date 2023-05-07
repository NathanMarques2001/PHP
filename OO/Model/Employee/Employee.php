<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Person;

abstract class Employee extends Person
{
  private float $salary;

  public function __construct(string $name, string $cpf, float $salary)
  {
    parent::__construct($name, $cpf);
    $this->salary = $salary;
  }

  public function salaryIncrease(float $newValue)
  {
    if ($newValue <= 0) {
      echo "O aumento deve ser maior do que zero!";
      return;
    }
    $this->salary += $newValue;
  }

  public function getSalary(): string
  {
    return $this->salary;
  }

  abstract public function calculateBonus(): float;
}
