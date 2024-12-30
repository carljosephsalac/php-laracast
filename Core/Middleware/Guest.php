<?php

/**
 * Class Guest
 *
 * This middleware class handles guest users. It checks if a user is already
 * logged in by inspecting the session. If a user is found in the session,
 * it redirects them to the home page.
 *
 * @package Core\Middleware
 */

namespace Core\Middleware;

class Guest
{
    public function handle()
    {
        if ($_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }
    }
}