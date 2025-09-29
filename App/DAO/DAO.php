<?php

namespace App\DAO;

use PDO;

abstract class DAO extends PDO
{
    protected static $conn = null;

    public function __construct()
    {
        //$datasourcename = $dsn;
        $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['database'];
        if(self::$conn == null)
        {
            self::$conn = new PDO(
                $dsn,
                $_ENV['db']['user'], 
                $_ENV['db']['pass'],
                [
                    PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
                ]
            );
        }
    }
}