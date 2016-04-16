<?php
ini_set('display_errors', '1');

include 'src/algo/SelectionSort.php';

$array = [8,5,9,10,4];
$class = new Hedronium\Kromo\Algo\SelectionSort;

print_r($class->sort($array));