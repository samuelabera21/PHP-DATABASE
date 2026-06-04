<?php
interface Logger
{
    public function log(string $message): string;
}

class FileLogger implements Logger
{
    public function log(string $message): string
    {
        return "Log: {$message}";
    }
}

$logger = new FileLogger();
echo $logger->log("Saved successfully");
