<?php

namespace Hedronium\Kromo\Sorters;

use Hedronium\Kromo\Sorter;

class SelectionSort extends Sorter
{
	public function sort(&$input, callable $comparator = null)
	{
		$comparator = static::getComparator($comparator);
		$this->validateInput($input);

		$length = count($input);

		for ($i = 0; $i < $length; $i++) {
			$min = $i;

			for ($j = $i+1; $j < $length; $j++) {
				if ($comparator($input[$min], $input[$j]) > 0) {
					$min = $j;
				}
			}

			if ($i !== $min) {
				$temp = $input[$i];
				$input[$i] = $input[$min];
				$input[$min] = $temp;
			}
		}

		return $input;
	}
}
