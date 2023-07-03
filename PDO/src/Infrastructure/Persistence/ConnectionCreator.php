<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use Dotenv\Dotenv;
use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        $path = dirname(__DIR__, 3);
        $dotenv = Dotenv::createImmutable($path);
        $dotenv->load();

        $connection = new PDO(
            "pgsql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_DBNAME'] . "",
            $_ENV['DB_USER'],
            $_ENV['DB_PASSWORD']
        );
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}
