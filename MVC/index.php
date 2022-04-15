<?php
namespace Core;
error_reporting(E_ALL);
ini_set("display_errors", "on");
spl_autoload_register(function ($class){
    //
});
$routes = require $_SERVER["DOCUMENT_ROOT"]."project/config/routes.php";
//$router = new Route();
//$track = $router->getTrack($router, $_SERVER["REQUEST_URI"]);
$track = (new Route())->getTrack($routes, $_SERVER["REQUEST_URI"]);
$page = (new Dispatcher)->getPage($track);
