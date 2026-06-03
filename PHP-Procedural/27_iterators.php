<?php
class NumberCollection implements IteratorAggregate
{
    public function getIterator(): Traversable
    {
        return new ArrayIterator([1, 2, 3, 4, 5]);
    }
}

$numbers = new NumberCollection();
foreach ($numbers as $number) {
    echo $number . ' ';
}
