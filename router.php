<?php


if (array_key_exists($url, $routes)){
    require $routes[$url];
}else {
         http_response_code(404);
         require "controllers/404.php";
     }
    