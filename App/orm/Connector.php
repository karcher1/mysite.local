<?php

namespace App\orm;

class Connector
{
    private static $connection;

    public static function getConnection()
    {
        if (!self::$connection) {
            $config = require __DIR__ . '/../../config/db_cred.php';
            $dsn = "{$config['driver']}:host={$config['host']};dbname={$config['db']};charset={$config['charset']}";
            self::$connection = new \PDO($dsn, $config['user'], $config['pass']);
            self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }

        return self::$connection;
    }
}
