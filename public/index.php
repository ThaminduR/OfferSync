<?php
echo 
require_once('Routes.php');

function __autoload($class_name)
{
  if (file_exists('./classes/'.$class_name.'.php'))
  {
    require_once './classes/'.$class_name.'.php';
  }
  else if(file_exists('./src/controllers/'.$class_name.'.php'))
  {
    require_once './src/controllers/'.$class_name.'.php';
  }
  else if(file_exists('./models/Login/'.$class_name.'php'))
  {
    require_once './models/Login/'.$class_name.'php';
  }
}

?>