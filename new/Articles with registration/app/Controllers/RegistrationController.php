<?php

namespace App\Controllers;

use App\Services\RegisterService;
use App\Services\RegisterServiceRequest;
use App\Template;

class RegistrationController
{
    public function showForm(): Template
    {

        return new Template("/registration/registration.twig.php");
    }

    public function store():void
    {
        $registerService = new RegisterService();
        $registerService->execute(
            new RegisterServiceRequest(
                $_POST['name'],
                $_POST['login'],
                $_POST['email'],
                $_POST['password'],
                $_FILES['avatar']
            )
        );
        return;
    }
}