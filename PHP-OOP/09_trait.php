<?php
trait TimestampTrait
{
    public function createdAt(): string
    {
        return date("Y-m-d H:i:s");
    }
}

class Post
{
    use TimestampTrait;
}

$post = new Post();
echo $post->createdAt();
