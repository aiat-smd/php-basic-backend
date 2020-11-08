<?php

class User {
    public string $login;
    public string $password;
    public string $name;

    public function __construct($login, $password, $name){
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
    }
}