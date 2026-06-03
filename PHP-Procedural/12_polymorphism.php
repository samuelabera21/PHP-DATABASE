<?php
interface Notification
{
    public function send(string $message): string;
}

class EmailNotification implements Notification
{
    public function send(string $message): string
    {
        return "Email: " . $message;
    }
}

class SmsNotification implements Notification
{
    public function send(string $message): string
    {
        return "SMS: " . $message;
    }
}

function notifyUser(Notification $notification): void
{
    echo $notification->send("Hello");
}

notifyUser(new EmailNotification());
