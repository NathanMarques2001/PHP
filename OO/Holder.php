<?php

class Holder
{
  private readonly string $cpf;
  private readonly string $name;

  public function __construct(string $name, string $cpf)
  {
    $this->name = $name;
    $this->cpf = $cpf;

    $this->validateName($name);
  }

  public function getCpf(): string
  {
    return $this->cpf;
  }

  public function getName(): string
  {
    return $this->name;
  }

  private function validateName(string $name)
  {
    if (mb_strlen($name) < 3) {
      echo "Nome precisa ter pelo menos 5 caracteres.";
      exit();
    }
  }
}
