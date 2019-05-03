<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/LoginStatus.php';

class ViewController
{
    public static function CreateView($viewName)
    {   
        require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/' . $viewName . '.html');
    }

    public static function CreateViewR($viewName)
    {   
        $logged = CheckLoginStatus();
        if ($logged)  {
            require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/' . $viewName . '.html');
        }
        else
        {
            echo "Please Login First !";
        }
    }
}
