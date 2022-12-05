<?php

namespace App\Services;
session_start();

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;

class LoginService
{

    private Connection $connection;

    public function __construct()
    {
        $connectionParams = [
            'dbname' => 'news-api',
            'user' => 'root',
            'password' => '',
            'host' => 'localhost',
            'driver' => 'pdo_mysql',
        ];
        return $this->connection = DriverManager::getConnection($connectionParams);
    }

    public function getIn()
    {
        echo "<pre>";
        $login = $_POST["login"];
        $password = md5($_POST["password"]);

        $resultSet = $this->connection->executeQuery('SELECT  id, name, login, email, password, avatar FROM `news-api`.users WHERE login = ?', [$login]);
        $user = $resultSet->fetchAssociative();

        if ($login == $user["login"] && $user["password"] == $password) {
            $_SESSION["hello"] = " welcome {$user["name"]} , you successfully log in! ";
            $_SESSION['id'] = $user["id"];
            $_SESSION["name"] = $user["name"];
            $_SESSION["login"] = $user["login"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["avatar"] = $user["avatar"];
            header("location: ../../views/profile/profile.twig.php");
        } else {
            $_SESSION["message"] = "Login or password incorrect";
            header("location: ../../views/login/logIn.twig.php");
            die;
        }
        $_SESSION['error'] = "Login: $login, does not exist ";
    }
}