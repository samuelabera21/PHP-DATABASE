<?php
class AuthService
{
    public function __construct(private PDO $pdo)
    {
    }

    public function login(string $email, string $password): bool
    {
        return $email !== '' && $password !== '';
    }
}

$pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
$auth = new AuthService($pdo);
echo $auth->login('user@example.com', '123456') ? 'Login OK' : 'Login Failed';
