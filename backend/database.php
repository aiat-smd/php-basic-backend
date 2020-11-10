<?php
include_once "./models/user.php";
include_once "./models/post.php";


class FakeDatabase{
    public Array $users;
    public Array $posts;

    public function __construct(){
        if(!$_SESSION["users"]){
            $_SESSION["users"] = [
                new User("aiat_smd", "aiat123", "Aiat"),
                new User("aibek", "aibek123", "Aibek"),
                new User("nurbek", "nurbek123", "Nurbek"),
            ];
        }
        if(!$_SESSION["posts"]){
            $_SESSION["posts"] = [
                new Post("Reading a book", "Reading in my life", "Books are one of the most important things in my life...", "Admin"),
                new Post("school", "our school", "text bla bla bla...", "Admin"),
            ];
        }
        $this->users = $_SESSION["users"];
        $this->posts = $_SESSION["posts"];
    }

    public function getUsers(){
        return $this->users;
    }

    public function getPosts(){
        return $this->posts;
    }
}