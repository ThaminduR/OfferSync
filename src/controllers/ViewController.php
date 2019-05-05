<?php

class ViewController
{
    public static function CreateView($viewName)
    {   
        if ($viewName=='search_result'){
        require_once($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/view/'.$viewName.'.php'); 
        }

        require_once($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/view/'.$viewName.'.html');
    }
}

?>