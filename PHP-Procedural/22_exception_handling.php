<?php
class Calculator
{
    public function divide(int $a, int $b): float
    {
        if ($b === 0) {
            throw new Exception("Division by zero");
        }

        return $a / $b;
    }
}

try {
    $calculator = new Calculator();
    echo $calculator->divide(10, 2);
} catch (Exception $exception) {
    echo $exception->getMessage();
}
