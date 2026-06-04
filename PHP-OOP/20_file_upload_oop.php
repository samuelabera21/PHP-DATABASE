<?php
class FileUpload
{
    public function __construct(private string $filename)
    {
    }

    public function info(): string
    {
        return "Ready to upload: {$this->filename}";
    }
}

$upload = new FileUpload("image.png");
echo $upload->info();
