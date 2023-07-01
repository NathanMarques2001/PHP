<?php

use Alura\Pdo\Infraestructure\Persistence\Connection;

$pdo = Connection::createConnection();

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');
