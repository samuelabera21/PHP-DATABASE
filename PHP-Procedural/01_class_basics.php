<?php
class WelcomeMessage
{
    public function show(): string
    {
        return "Welcome to PHP OOP with XAMPP";
    }
}

$message = new WelcomeMessage();
echo $message->show();
