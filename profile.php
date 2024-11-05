<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login.php');
    exit;
}
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Seja bem vindo, <?php echo $username?>! Essa é a sua página especial</h1>
</body>
</html>