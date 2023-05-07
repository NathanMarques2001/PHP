<?php

namespace Alura\Bank\Model;

class Person
{
  private string $cpf;
  protected string $name;

  public function __construct(string $name, string $cpf)
  {
    $this->validateName($name);
    $this->name = $name;
    $this->cpf = $cpf;
  }

  public function getCpf(): string
  {
    return $this->cpf;
  }

  public function getName(): string
  {
    return $this->name;
  }

  final protected function validateName(string $name)
  {
    if (mb_strlen($name) < 3) {
      echo "Nome precisa ter pelo menos 5 caracteres.";
      exit();
    }
  }
}
