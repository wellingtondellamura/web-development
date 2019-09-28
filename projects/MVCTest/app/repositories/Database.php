<?php

namespace App\Repositories;

use \PDO;

class Database {

    public static $USERNAME = 'root';
    public static $PASSWORD = 'abc123*';
    public static $DB = 'catalogo';

    public static function getConnection() {
        return new PDO('mysql:host=localhost;dbname='.self::$DB,  self::$USERNAME, self::$PASSWORD);
    }

}
