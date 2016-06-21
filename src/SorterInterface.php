<?php

namespace Hedronium\Kromo;

interface SorterInterface
{
    public function sort(&$input, callable $comparator = null);
}
