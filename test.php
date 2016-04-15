<?php
ini_set('display_errors', '1');

include 'src/algo/BubbleSort.php';

$array = [8,5,9];
$class = new Hedronium\Kromo\BubbleSort;

print_r($class->sort($array));