<?php
interface PaymentGateway
{
    public function pay(float $amount): string;
}

class PayPal implements PaymentGateway
{
    public function pay(float $amount): string
    {
        return "Paid $" . number_format($amount, 2) . " using PayPal";
    }
}

$payment = new PayPal();
echo $payment->pay(25.5);
