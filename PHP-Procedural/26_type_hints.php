<?php
class MathHelper
{
    public function sum(int $a, int $b): int
    {
        return $a + $b;
    }
}

$math = new MathHelper();
echo $math->sum(4, 6);
