<?php

session_start();

if(!isset($_SESSION['currentUser'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>
<center>
    <h2>Welcome <?php echo $_SESSION['currentUser']; ?></h2>
</center>
    <a href="logout.php">LOGOUT</a>

</body>
</html>