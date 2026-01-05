<?php

namespace App\Core;

use PDO;

class Database {

    private static $instance = null;

    public static function getInstance() {

        if (self::$instance === null) {
            self::$instance = new PDO(
                "mysql:host=localhost;dbname=blog_system",
                "root",
                "Saadia@02"
            );
        }

        return self::$instance;
    }
}
