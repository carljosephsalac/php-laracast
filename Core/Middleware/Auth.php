<?php

/**
 * Class Auth
 *
 * This class handles the authentication middleware.
 * It checks if a user is logged in by verifying the session.
 * If the user is not logged in, it redirects to the registration page.
 */

namespace Core\Middleware;

class Auth
{
    public function handle()
    {
        if (!$_SESSION['user'] ?? false) {
            header('location: /register');
            exit();
        }
    }
}