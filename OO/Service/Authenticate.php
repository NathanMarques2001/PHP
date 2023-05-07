<?php

namespace Alura\Bank\Service;

use Alura\Bank\Model\Auth;

class Authenticate
{
  public function login(Auth $user, string $password)
  {
    if ($user->authenticate($password)) {
      echo "Login bem sucedido!";
    } else {
      echo "Senha incorreta!";
    }
  }
}
