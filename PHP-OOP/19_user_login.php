<?php
class UserAuthenticator
{
    public function login(string $username, string $password): string
    {
        if ($username === "admin" && $password === "1234") {
            return "Login successful";
        }

        return "Invalid credentials";
    }
}

$auth = new UserAuthenticator();
echo $auth->login("admin", "1234");
