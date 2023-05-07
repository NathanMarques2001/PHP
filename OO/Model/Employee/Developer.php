<?php

use Alura\Bank\Model\Employee\Employee;

class Developer extends Employee
{
  public function calculateBonus(): float
  {
    return $this->getSalary() * 0.5;
  }

  public function nextLevel()
  {
    $this->salaryIncrease($this->getSalary() * 0.75);
  }
}
