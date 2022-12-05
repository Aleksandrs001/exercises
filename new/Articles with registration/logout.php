<?php
session_start();
unset($_SESSION);
header("location: /views/login/logIn.twig.php");
