<?php


namespace App\Controllers;

use App\Services\LoginService;
use App\Template;

class LoginController
{

    public function loginWeb():Template
    {

        return new Template("login/login.twig.php");
    }

    public function startDBservice()
    {

        return  ;
    }

}