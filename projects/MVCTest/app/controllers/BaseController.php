<?php

namespace App\Controllers;

use App\Flash;

class BaseController 
{
    private static $VIEWS_DIR = "../app/views/";

    public function response($view, $params)
    {
        Flash::add("params", $params);
        $viewName = self::$VIEWS_DIR.$view.".php";
        require_once($viewName);
    }

}