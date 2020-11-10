<?php 

class Post {
    public static int $allPosts = 0;
    public int $id;
    public string $title;
    public string $description;
    public int $views = 0;
    public string $content;
    public string $author;

    public function __construct($title, $description, $content, $author){
        self::$allPosts++;
        $this->id = self::$allPosts;
        $this->title = $title;
        $this->description = $description;
        $this->content = $content;
        $this->author = $author;
    }

    public function incrementViews(){
        $this->views++;
    }
}