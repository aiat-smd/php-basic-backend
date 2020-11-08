<?php 

$uri = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];


if ($uri == "/"){
    include "./pages/home.php";
}
elseif ($uri =="/posts") {
    include "./pages/posts.php";
}
elseif ($uri =="/login") {
    include "./pages/form.php";
}
elseif (preg_match("/fromForm.*/", $uri)) {
    include "./pages/form_handler.php";
}
else{
    include "./pages/error_404.php";
}
