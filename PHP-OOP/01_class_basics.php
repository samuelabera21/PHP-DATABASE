<?php
class WelcomeMessage
{
    public function show(): string
    {
        return "Welcome to PHP OOP basics";
    }
}

$message = new WelcomeMessage();
echo $message->show();
