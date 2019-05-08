<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/LoginStatus.php';


class ViewController
{
    public static function CreateView($viewName)
<<<<<<< HEAD
    {   
        if ($viewName=='search_result'){
        require_once($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/view/'.$viewName.'.php'); 
        }

        require_once($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/view/'.$viewName.'.html');
=======
    {
        if ($viewName == 'index') {
            $logged = CheckLoginStatus();
            if ($logged) {
                require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/logged.html');
            } else {
                    require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/index.html');
                }
        } else {
                require_once($_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/' . $viewName . '.html');
            }
>>>>>>> 052bd3ec5892b96c2ac704fab1c51ebec625795f
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
