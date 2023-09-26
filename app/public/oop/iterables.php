<?php
function printIterable(iterable $myIterable)
{
    foreach ($myIterable as $item) {
        echo $item;
    }
}

$arr = ["a", "b", "c"];
printIterable($arr);

class MyIterator implements Iterator
{
    private $items = [];
    private $pointer = 0;

    public function __construct($items)
    {
        // array_values() makes sure that the keys are numbers
        $this->items = array_values($items);
    }

    public function current(): mixed
    {
        return $this->items[$this->pointer];
    }

    public function key(): mixed
    {
        return $this->pointer;
    }

    public function next(): void
    {
        $this->pointer++;
    }

    public function rewind(): void
    {
        $this->pointer = 0;
    }

    public function valid(): bool
    {
        // count() indicates how many items are in the list
        return $this->pointer < count($this->items);
    }
}

// Use the iterator as an iterable
$iterator = new MyIterator(["a", "b", "c"]);
printIterable($iterator);
