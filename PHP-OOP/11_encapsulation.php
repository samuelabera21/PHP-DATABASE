<?php
class BankAccount
{
    public function __construct(private float $balance)
    {
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

$account = new BankAccount(1000);
$account->deposit(250);
echo $account->getBalance();
