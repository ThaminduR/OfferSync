<?php

class ViewController
{
    public static function CreateView($viewName)
    {
        require_once("./view/$viewName.php");
    }
}

?>