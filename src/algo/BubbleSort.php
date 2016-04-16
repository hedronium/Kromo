<?php

namespace Hedronium\Kromo\Algo;

Class BubbleSort {

	protected $input;
	
	public function sort($input , callable $comparator = null) {

		$length = count($input) - 2;
		$this->input = $input;


		 if (!is_callable($comparator)) {

	 		$comparator = function ($a , $b) {

	 			return $a - $b;
	 		};
		 }


		  for ( $i = 0;  $i <= $length; $i++) {

				for ($j = 0; $j <= $length; $j++) {

						if ( $comparator($this->input[$j] , $this->input[$j+1]) > 0 ) {

							$temp = $this->input[$j];
							$this->input[$j] = $this->input[$j+1];
							$this->input[$j+1] = $temp;
						}
				}
			}

		return $this->input;

	}
	
}