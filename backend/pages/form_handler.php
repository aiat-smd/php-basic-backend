<?php

$db = new FakeDatabase();

$login = $_POST["login"];
$password = $_POST["password"];
$user = null;

foreach ($db->getUsers() as $currentUser) {
    if ($currentUser->login == $login && $currentUser->password == $password){
        $user = $currentUser;
    }
}

if ($user != null){
    echo "Authorized user: " . $user->name;
}else{
    echo "User not found";
}