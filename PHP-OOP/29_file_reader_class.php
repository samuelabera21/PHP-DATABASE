<?php
class FileReader
{
    public function __construct(private string $content)
    {
    }

    public function read(): string
    {
        return $this->content;
    }
}

$reader = new FileReader("Learning PHP OOP");
echo $reader->read();
