<?php

require $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Routes.php';
require $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/AltoRouter.php';

$router = new AltoRouter();
session_start();
$router->addRoutes($routes);
$match = $router->match();
if( is_array($match) && is_callable( $match['target'])){
  call_user_func_array( $match['target'], $match['params']);
} else {
  header( $_SERVER["SERVER_PROTOCOL"].'404 Not Found');
}
?>