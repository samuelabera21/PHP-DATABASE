<?php
class BankAccount
{
    private float $balance = 0;

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(100);
echo $account->getBalance();
