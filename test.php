<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'vendor/autoload.php';

$array = [2,3238,345,25,6,634,5,6,3456,456,6,45,7,67,1];

$sorter = new Hedronium\Kromo\Sorters\SelectionSort;
print_r($sorter->sort($array));
