<?php

class ViewController
{
    public static function CreateView($viewName)
    {
        require_once($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/view/'.$viewName.'.html');
    }
}

?>