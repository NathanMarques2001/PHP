<?php

namespace Alura\Bank\Model\Employee;

class Manager extends Employee
{
  public function calculateBonus(): float
  {
    return $this->getSalary();
  }
}
