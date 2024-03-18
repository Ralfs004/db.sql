<?php


$routes = require "routes.php";

$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];
if (array_key_exists($url, $routes)){
    require $routes[$url];
}else {
         http_response_code(404);
         require "controllers/404.php";
     }
    