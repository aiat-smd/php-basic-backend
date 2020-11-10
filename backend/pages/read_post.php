<?php 
if($authorizedUser == null){
    redirect("/");
}
$posts = db()->getPosts();
$id = $_GET["id"];
$post = null;

foreach($posts as $i){
    if ($i->id == $id){
        $post = $i;
    }
}
if ($post == null){
    header("Location: /notFound");
}
$post->incrementViews();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1><?= $post->title ?></h1>
        <div class="post">
            <p><?= $post->description ?></p>
            <p><?= $post->author ?></p>
            <p><?= $post->content ?></p>

        </div>
</body>
</html>