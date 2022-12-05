<?php

session_start();
//if (!$_SESSION["name"]) {
//    header("location: registration.php");
//}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>HELLO FROM USER PROFILE</h1>
<h2 ><?php echo "This is your profile, {$_SESSION["hello"]} "?> </h2>
<img src="../../<?=$_SESSION["avatar"] ?>" alt="_none" height="100">
<h1> <?php echo "Account id: {$_SESSION["id"]} <br> Name: {$_SESSION["name"]} <br> Login: {$_SESSION["login"]}<br>
 Email: {$_SESSION["email"]}" ?></h1>
<form></form>
<a href="/logout.php" methods="get" id="1" class="logout">Logout</a>

</body>
</html>
