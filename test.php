<?php
ini_set('display_errors', '1');

include 'src/algo/CombSort.php';

$array = [10,9,8,7,6,5,4,3,2,1];

$class = new Hedronium\Kromo\Algo\CombSort;

print_r($class->sort($array));