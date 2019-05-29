<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/LoginStatus.php';


class ViewController extends Controller
{
    public static function CreateView($viewName)
    {
        if ($viewName == 'index') {
            $logged = CheckLoginStatus();
            if ($logged) {
                require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/welcome.php');
            } else {
                require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/index.php');
            }
        } else {
            require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/' . $viewName . '.php');
        }
    }

    public static function CreateViewR($viewName)
    {
        $logged = CheckLoginStatus();
        if ($logged) {
            require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/' . $viewName . '.php');
        } else {
            require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/Login/LoginFail.php');
        }
    }
}
