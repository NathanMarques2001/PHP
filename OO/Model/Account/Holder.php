<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\{Adress, Auth, Person};

class Holder extends Person implements Auth
{
  private readonly Adress $adress;

  public function __construct(string $name, string $cpf, Adress $adress)
  {
    parent::__construct($name, $cpf);
    $this->adress = $adress;
  }

  public function getEndereco(): Adress
  {
    return $this->adress;
  }

  public function authenticate(string $password): bool
  {
    return $password === "456";
  }
}
