<?php
$message = "";
if ($_GET["message"]){
    $message = $_GET["message"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/fromForm" method="post">
        <p> <?php
            if ( $message != ""){
                echo $message;
            }?>
        </p>
        <label for="login">Login:</label>
        <input id="login" type="text" name="login">
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" type="text" name="password">
        <br>
        <br>
        <button>Submit</button>
    </form>

</body>
</html>