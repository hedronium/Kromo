<?php

namespace Hedronium\Kromo\Sorters;
use Hedronium\Kromo\Sorter;

Class CountingSort extends Sorter {

	
	protected $input;

	public function sort(&$input , callable $comparator = null )
	{

		$this->input = $input;
		
		$this->validateInput($this->input);
		$comparator = static::getComparator($comparator);

		$length = count($this->input);

		$sum = [];
		$large = $this->input[0];
		$new = [];

		// Get the largest value from the array

		for ( $i = 1; $i < $length; $i++ ) {

				if ($large < $this->input[$i]) {

					$large = $this->input[$i];

				}

		}

		// Initialize value with 0

		for ($i = 0; $i <= $large; $i++) {

				$sum[$i] = 0; 

		}



		// increment value based on matching

		for ($i = 0; $i < $length; $i++) {
					
				$sum[$this->input[$i]]++;	

		}



		// now add current index value with previous one

		for ($i = 1; $i < $length; $i++ ) {
			  
			  $add = $sum[$i]+$sum[$i-1];

			  $sum[$i] = $add;

		}


		for ($i = ($length - 1); $i > 0; $i-- ) {

			$new[$sum[$this->input[$i]]] = $this->input[$i];

		}

		return $new;

	}


}