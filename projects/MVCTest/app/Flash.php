<?php

namespace App;

class Flash
{

    private static $FLASH = "FLASH";

    private static function checkSession()
    {
        if (!isset($_SESSION)){
            session_start();
        }
    }

    public static function add($name, $memory)
    {
        self::checkSession();
        $_SESSION[self::$FLASH][$name] = $memory;
    }

    public static function get($name)
    {
        self::checkSession();
        $value = $_SESSION[self::$FLASH][$name];
        self::remove($name);
        return $value;
    }

    public static function remove($name) 
    {
        self::checkSession();
        if (isset($_SESSION[self::$FLASH][$name]))
        {
            unset($_SESSION[self::$FLASH][$name]);
        }
    }

}