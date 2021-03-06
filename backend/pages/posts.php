<?php 
$posts = db()->getPosts();

if($authorizedUser == null){
    redirect("/");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h3><a href="/">Home</a></h3>
    <h1>Posts</h1>
    <?php foreach($posts as $post): ?>
        <div class="post">
            <h4><?= $post->title ?></h4>
            <p><?= $post->description ?></p>
            <p><?= $post->author ?></p>
            <p>Views: <?= $post->views ?></p>

            <a href="/post?id=<?= $post->id ?>">Read more</a>
        </div>
        <hr>
    <?php endforeach; ?>
</body>
</html>