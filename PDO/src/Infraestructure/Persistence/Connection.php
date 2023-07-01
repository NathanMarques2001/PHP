<?php

namespace Alura\Pdo\Infraestructure\Persistence;

use PDO;

class Connection
{

  public static function createConnection(): PDO
  {
    $dataBasePath = __DIR__ . "../../../../database.sqlite";

    return new PDO('sqlite:' . $dataBasePath);
  }
}
