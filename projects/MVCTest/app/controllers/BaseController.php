<?php

namespace App\Controllers;

use App\Flash;

class BaseController 
{
    private static $VIEWS_DIR = "../app/views/";

    public function response($view, $title, $params)
    {
        $viewName = self::$VIEWS_DIR.$view.".php";
        Flash::add("params", $params);
        Flash::add("page", $viewName);
        Flash::add("title",$title);                
        $templateName = self::$VIEWS_DIR."_templates/main.php";
        require_once($templateName);
    }

}