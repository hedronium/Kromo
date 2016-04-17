<?php

namespace Hedronium\Kromo\Sorters;

use Hedronium\Kromo\Sorter;

class BubbleSort extends Sorter
{
	public function sort(&$input , callable $comparator = null)
	{
		$comparator = static::getComparator($comparator);
		$this->validateInput($input);

		$length = count($input) - 1;

		for ($i = 0; $i < $length; $i++) {
			$max = $length - $i;

			for ($j = 0; $j < $max; $j++) {
				if ($comparator($input[$j], $input[$j+1]) > 0) {
					$temp = $input[$j];

					$input[$j] = $input[$j+1];
					$input[$j+1] = $temp;
				}
			}
		}

		return $input;
	}
}
