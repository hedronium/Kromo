<?php

namespace Hedronium\Kromo\Sorters;

use Hedronium\Kromo\Sorter;

class InsertionSort extends Sorter
{
	public function sort(&$input, callable $comparator = null)
	{
		$comparator = static::getComparator($comparator);
		$this->validateInput($input);

		$length = count($input);

		for ($i = 1; $i < $length; $i++) {
			$checking = $input[$i];

			for ($j = $i-1; $j > -1 && $comparator($input[$j], $checking) > 0; $j--) {
				$input[$j+1] = $input[$j];
			}

			$input[$j+1] = $checking;
		}

		return $input;
	}
}
