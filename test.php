<?php
ini_set('display_errors', '1');

include 'src/algo/InsertationSort.php';

$array = [7,2,4,1,5,3];
$class = new Hedronium\Kromo\Algo\InsertationSort;

print_r($class->sort($array));