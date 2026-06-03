<?php
class UserProfile
{
    private string $username = "";

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}

$profile = new UserProfile();
$profile->setUsername("copilot_user");
echo $profile->getUsername();
