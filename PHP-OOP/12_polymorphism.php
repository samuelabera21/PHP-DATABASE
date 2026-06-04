<?php
interface PaymentMethod
{
    public function pay(float $amount): string;
}

class CashPayment implements PaymentMethod
{
    public function pay(float $amount): string
    {
        return "Paid {$amount} by cash";
    }
}

class CardPayment implements PaymentMethod
{
    public function pay(float $amount): string
    {
        return "Paid {$amount} by card";
    }
}

function checkout(PaymentMethod $paymentMethod, float $amount): string
{
    return $paymentMethod->pay($amount);
}

echo checkout(new CardPayment(), 500);
