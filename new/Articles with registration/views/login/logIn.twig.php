<?php
session_start();
//if($_SESSION["name"]){
//    header("location: profile.twig.php");
//}
?>
<!doctype html>
<form lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Authorization and Registration</title>
        <link rel="stylesheet" href="../../public/style/css.css">

    </head>
    <form
    =class"flag">
    <div class="container">
        <div class="flag">
            <a id="bbb" href="https://war.ukraine.ua/donate/"
               target="_blank"> <img id="top" src="../../public/pictures/ukr2.jpeg"
                                     alt="_blanc" width="200"/>
            </a>
        </div>
</form>
<body>
<form action="/login" method="post">
    <label>Login</label>
    <input type="text" name="login" placeholder="Enter login">
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter password">
    </label>
    <button type="submit">Login</button>
    <p>
        You don't have account? - <a methods="get" href="/registration">Create</a>
    </p>

    <br>
    <h2 class="message">
    <?php if(isset($_SESSION["message"])){
       echo $_SESSION["message"];
       unset($_SESSION["message"]);
    } ; ?>
    </h2>
    <a href="/logout.php" class="logout">Logout</a>
</form>

</body>
</html>