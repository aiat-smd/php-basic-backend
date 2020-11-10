<?php

$db = db();

$login = $_POST["login"];
$password = $_POST["password"];
$user = null;

foreach ($db->getUsers() as $currentUser) {
    if ($currentUser->login == $login && $currentUser->password == $password){
        $user = $currentUser;
    }
}

if ($user != null){
    $_SESSION["user"] = $user;
    header("Location: /");
}else{
    header("Location: /login?message=User not found");
}