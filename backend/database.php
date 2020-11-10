<?php
include_once "./models/user.php";


class FakeDatabase{

    public function getUsers(){
        return[
            new User("aiat_smd", "aiat123", "Aiat"),
            new User("aibek", "aibek123", "Aibek"),
            new User("nurbek", "nurbek123", "Nurbek"),
        ];
    }
}