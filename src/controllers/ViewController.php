<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/LoginStatus.php';


class ViewController
{
    public static function CreateView($viewName)
    {
        if ($viewName == 'index') {
            $logged = CheckLoginStatus();
            if ($logged) {
                require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/welcome.html');
            } else {
                    require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/index.html');
                }
        } else {
                require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/' . $viewName . '.html');
            }
    }

    public static function CreateViewR($viewName)
    {
        $logged = CheckLoginStatus();
        if ($logged) {
            require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/' . $viewName . '.html');
        } else {
            require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/Login/LoginFail.php');
        }
    }
}
