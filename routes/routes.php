<?php

$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$filteredRoutes = array_filter($routesArray);
$ReindexRoutes = array_values($filteredRoutes);
$lastRoute = end($ReindexRoutes);

$json = array(
    "endpoint"=>$lastRoute,
);

echo json_encode($json, true);
   
?>