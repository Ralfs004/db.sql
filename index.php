<?php 

require "functions.php";

$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];



if ($url == "/about") {
    require "controllers/about.php";
}

elseif ($url == "/story") {
    require "controllers/story.php";
}

elseif ($url == "/") {
    require "controllers/index.php";
}

elseif ($url == "/index") {
    require "controllers/index.php";
}
else {
    http_response_code(404);
    require "controllers/404.php";
}

