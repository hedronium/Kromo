<?php

namespace Hedronium\Kromo\Algo;

Class InsertationSort 
{

	protected $input;

	public function sort($input , callable $comparator = null)
	{
	   $this->input = $input;
	   $length = count($this->input) - 1;

		if(!is_callable($comparator)) {

			$comparator = function ($a , $b) {
				return $a - $b;
			};
		}

		for ($i = 1; $i <= $length; $i++) {

				$value = $this->input[$i];
				$hole = $i; 

				while ($hole > 0 && $comparator($this->input[$hole - 1] , $value) > 0 ) {

					$this->input[$hole] = $this->input[$hole - 1];
					$hole = $hole - 1;

				}

			$this->input[$hole] = $value;
				
		}

		return $this->input;


	}

}