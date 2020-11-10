<?php 
include_once "./database.php";

session_start();

$uri = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];

$authorizedUser = null;

if( $_SESSION["user"]){
    $authorizedUser = $_SESSION["user"];
}

if ($uri == "/"){
    include "./pages/home.php";
}
elseif ($uri =="/posts") {
    include "./pages/posts.php";
}
elseif ($uri =="/logout") {
    include "./pages/logout.php";
}
elseif (preg_match("/\/login.*/", $uri)) {
    include "./pages/form.php";
}
elseif (preg_match("/\/fromForm.*/", $uri)) {
    include "./pages/form_handler.php";
}
else{
    include "./pages/error_404.php";
}
