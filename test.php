<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$array = [10,9,8,7,6,5,4,3,2,1];

$class = new Hedronium\Kromo\Sorters\CombSort;

print_r($class->sort($array));

