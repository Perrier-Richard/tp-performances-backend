<?php

namespace App\Common;

use PDO;

class Database {

    private static ?PDO $pdo = null;

    private function __construct () {
        self::$pdo = new PDO("mysql:host=db;dbname=tp;charset=utf8mb4", "root", "root");
    }

    public static function get(): PDO {
        if (self::$pdo === null) {
            new self();
        }
        return self::$pdo;
    }
}