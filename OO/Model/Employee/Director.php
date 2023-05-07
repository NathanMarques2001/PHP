<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Auth;

class Director extends Employee implements Auth
{
  public function calculateBonus(): float
  {
    return $this->getSalary() * 2;
  }

  public function authenticate(string $password): bool
  {
    return $password === "1234";
  }
}
