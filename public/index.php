<?php


require $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/app/Routes.php';

//require_once $root.'/src/app/Routes.php';
function __autoload($class_name)
{
  if (file_exists($_SERVER['DOCUMENT_ROOT'].'/..'. '/src/app/'.$class_name.'.php'))
  {
    require_once $_SERVER['DOCUMENT_ROOT'].'/..' . '/src/app/'.$class_name.'.php';
  }
  else if(file_exists($_SERVER['DOCUMENT_ROOT'].'/..' . '/src/controllers/'.$class_name.'.php'))
  {
    require_once $_SERVER['DOCUMENT_ROOT'].'/..' . '/src/controllers/'.$class_name.'.php';
  }
  else if(file_exists($_SERVER['DOCUMENT_ROOT'].'/..' . '/src/models/Login/'.$class_name.'php'))
  {
    require_once $_SERVER['DOCUMENT_ROOT'].'/..' . '/src/models/Login/'.$class_name.'php';
  }
}

?>