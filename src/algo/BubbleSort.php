<?php

namespace Hedronium\Kromo;

Class BubbleSort {

	protected $input;
	protected $comparator;

	public function sort($input , callable $comparator) {

		$length = count($input) - 2;
		$this->input = $input;

		if (is_callable($comparator)) {

			for ( $i = 0;  $i <= $length; $i++) {

					for ($j = 0; $j <= $length; $j++) {

							if ( $comparator($this->input[$j] , $this->input[$j+1]) > 0 ) {

								$temp = $this->input[$j];
								$this->input[$j] = $this->input[$j+1];
								$this->input[$j+1] = $temp;
							}
					}
			}

		} else {


			for ( $i = 0;  $i <= $length; $i++) {

					for ($j = 0; $j <= $length; $j++) {

							if ( $this->compValue($this->input[$j] , $this->input[$j+1]) > 0 ) {

								$temp = $this->input[$j];
								$this->input[$j] = $this->input[$j+1];
								$this->input[$j+1] = $temp;
							}
					}
			}

		}

		return $this->input;

	}

	public function compValue($a = null , $b = null) {

		return $a - $b;

	}
	
}