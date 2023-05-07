<?php

namespace Alura\Bank\Model;

interface Auth
{
  public function authenticate(string $password): bool;
}
