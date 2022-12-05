<?php

namespace App\Controllers;

use App\Template;

class ProfileController
{
    public function userProfile(): Template
    {
        return new Template("profile/profile.twig.php");
    }
}
