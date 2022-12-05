<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization and Registration</title>
    <link rel="stylesheet" href="../../public/style/css.css">

</head>
<body>
<form action="/registration" method="post"   enctype="multipart/form-data">
    <div class='flag'>
        <a id='bbb' href="https://war.ukraine.ua/donate/"
           target="_blank"> <img id="top" src="../../public/pictures/ukr2.jpeg"
                                 alt="_blanc" width="200"/>
        </a><br>
    </div>
    <label>Name</label>
    <input type="text" name="name" placeholder="Enter name" required>
    <label>Login</label>
    <input type="text" name="login" placeholder="Enter login" required>
    <label>Email</label>
    <input type="email" name="email" placeholder="Enter email" required>
    <label>Picture</label>
    <input type="file" name="avatar">
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter password" required>
    <label>Repeat password</label>
    <input type="password" name="repeatPassword" placeholder="Repeat password" required>
    </label>
    <button type="submit">Submit</button>You already have account?- <a href="/login">Log in</a>

    <p>By creating an account you agree to our <a methods="get" href="/views/registration/termsANDprivacy.twig.php" target="_blank">
            <br>  Terms & Privacy</a>.</p>
    <a href="/logout.php" methods="get" id="1" class="logout">Logout</a>
        <br>
    <h2 class="message">
        <?php
        if(isset( $_SESSION["errorMessage"]) ){
            echo ($_SESSION["errorMessage"]);
            unset($_SESSION["errorMessage"]);
        }
        ?>
        <?php
        if(isset( $_SESSION["greetings"]) ){
            echo ($_SESSION["greetings"]);
            unset($_SESSION["greetings"]);
        }
        ?>
    </h2>
        <script>
            var password = document.getElementById("password")
                , repeatPassword = document.getElementById("repeatPassword");

            function validatePassword(){
                if(password.value !== repeatPassword.value) {
                    repeatPassword.setCustomValidity("Passwords Don't Match");
                } else {
                    repeatPassword.setCustomValidity('');
                }
            }

            password.onchange = validatePassword;
            repeatPassword.onkeyup = validatePassword;
        </script>
    </p>
    <br>
</form>
</body>
</html>