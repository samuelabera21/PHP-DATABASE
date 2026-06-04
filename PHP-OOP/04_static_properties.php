<?php
class Counter
{
    public static int $count = 0;

    public function __construct()
    {
        self::$count++;
    }
}

new Counter();
new Counter();
echo Counter::$count;
