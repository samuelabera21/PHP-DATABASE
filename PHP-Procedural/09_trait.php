<?php
trait Logger
{
    public function log(string $message): string
    {
        return "LOG: " . $message;
    }
}

class AppService
{
    use Logger;
}

$service = new AppService();
echo $service->log("Service started");
