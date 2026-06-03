<?php
class FileUploader
{
    public function upload(string $fileName): string
    {
        return "Uploaded: " . $fileName;
    }
}

$uploader = new FileUploader();
echo $uploader->upload('image.png');
