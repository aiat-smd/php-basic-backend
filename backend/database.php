<?php
include_once "./models/user.php";


class FakeDatabase{

    public function getUsers(){
        return[
            new User("aiat_smd", "aiat12", "Aiat"),
            new User("aibek", "aibek12", "Aibek"),
            new User("nurbek", "nurbek12", "Nurbek"),
        ];
    }
}