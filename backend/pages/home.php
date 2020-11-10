<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
        <?php if($authorizedUser != null): ?>
            <h2> Hello <?= $authorizedUser->name ?></h2>
        <?php endif; ?>

    <ul>
        <?php if($authorizedUser == null): ?>
            <li><a href="/login">Login</a></li>
        <?php else: ?>
            <li><a href="/logout">Logout</a></li>
        <?php endif; ?>
        <li><a href="/posts">Posts</a></li>
    </ul>

</body>
</html>