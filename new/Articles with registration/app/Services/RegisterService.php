<?php

namespace App\Services;
session_start();

use App\Controllers\LoginController;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;

class RegisterService
{
    public Connection $connection;

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

    public function execute(RegisterServiceRequest $request): LoginController
    {
        $userEmail = $request->getEmail();
        $emailFrom_DB = $this->connection->executeQuery("SELECT email FROM users WHERE email = '$userEmail' ")->rowCount();
        if ($emailFrom_DB == 1) {
            $_SESSION['errorMessage'] = "This email already in DB";
            header("location:../../views/registration/registration.twig.php");
            die;
        }
        $userLogin = $request->getLogin();
        $loginFrom_DB = $this->connection->executeQuery("SELECT login FROM users WHERE login = '$userLogin' ")->rowCount();
        if ($loginFrom_DB == 1) {
            $_SESSION['errorMessage'] = "This login already in DB";
            header("location:../../views/registration/registration.twig.php");
            die;
        }

        $this->connection->insert('users', [
            'name' => $request->getName(),
            'login' => $request->getLogin(),
            'email' => $request->getEmail(),
            'password' => md5($request->getPassword()),
            'avatar' => $request->getAvatar()
        ]);
        $registeredLogin = $request->getLogin();
        if (1 == $this->connection->executeQuery("SELECT login FROM users WHERE login = '$registeredLogin' ")->rowCount()){
        $_SESSION['greetings'] = "{$request->getname()} you successfully registered.";
        header("location:../../views/registration/registration.twig.php");
    }
        return new LoginController($this->connection);
    }

//    public function getConnection():LoginService
//    {
//        return new LoginService($request);
//    }
}
