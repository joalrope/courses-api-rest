<?php

$routesArray = explode("/", $_SERVER['REQUEST_URI']);

echo 'Metodo de la solicitud: '.$_SERVER['REQUEST_METHOD'];

echo '<br>';

$pos = array_search('api', $routesArray) + 1;

$curRouteArray = array_slice($routesArray, $pos, );

$curRoute = implode('/', $curRouteArray);

print_r('Ruta actual: '.$curRoute);
   
?>