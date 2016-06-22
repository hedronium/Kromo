<?php

namespace Hedronium\Kromo\Sorters;
use Hedronium\Kromo\Sorter;

Class CocktailSort extends Sorter {

	
	protected $input;

	public function sort(&$input , callable $comparator = null )
	{

		$this->input = $input;
		
		$this->validateInput($this->input);
		$comparator = static::getComparator($comparator);

		$swap = 1;
		$length = count($this->input);
		$length = $length - 1;

		while ($swap == 1) {

				$swap = 0;


				for ($i = 0; $i < $length; $i++) {

						if ($this->input[$i] > $this->input[$i+1] ) {

							$temp = $this->input[$i];
							$this->input[$i] = $this->input[$i+1];
							$this->input[$i+1] = $temp;
							$swap = 1;

						}

				}


				// sort 2

				for ($i=$length; $i > 0; $i--) {
					# code...

					if ($this->input[$i-1] > $this->input[$i]) {

							$temp = $this->input[$i];
							$this->input[$i] = $this->input[$i-1];
							$this->input[$i-1] = $temp;
							$swap = 1;

					}

				}
				
		}

		return $this->input;
	}

}