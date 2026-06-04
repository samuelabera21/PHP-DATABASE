<?php
class SessionManager
{
    public function start(): string
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['message'] = 'OOP session started';
        return $_SESSION['message'];
    }
}

$sessionManager = new SessionManager();
echo $sessionManager->start();
