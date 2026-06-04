<?php
class NumberCollection implements IteratorAggregate
{
    public function __construct(private array $numbers)
    {
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->numbers);
    }
}

$collection = new NumberCollection([1, 2, 3]);
foreach ($collection as $number) {
    echo $number;
}
