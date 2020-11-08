<?php 

$uri = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];

if ($uri == "/"){
    include "./home.php";
}