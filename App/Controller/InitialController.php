<?php

namespace App\Controller;

final class InitialController
{
    public static function index() : void
    {
        include VIEWS . '/Initial/home.php';
    }
}