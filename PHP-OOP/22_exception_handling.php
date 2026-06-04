<?php
class Divider
{
    public function divide(int $a, int $b): int
    {
        if ($b === 0) {
            throw new Exception("Division by zero");
        }

        return intdiv($a, $b);
    }
}

$divider = new Divider();
try {
    echo $divider->divide(10, 2);
} catch (Exception $e) {
    echo $e->getMessage();
}
