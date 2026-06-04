<?php
namespace App\Models;

class User
{
    public function fullName(): string
    {
        return "OOP Namespace Example";
    }
}

$user = new User();
echo $user->fullName();
