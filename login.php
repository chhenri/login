<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    //Simulação de login correto
    $_SESSION['username'] = $_POST['username'];
    header('Location: profile.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post">
    Username: <input type="text" name="username" />
    Password: <input type="password"  name="password" id=""/>
        <button type="submit">Login</button>
    </form>
</body>
</html>