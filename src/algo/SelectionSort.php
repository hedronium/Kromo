<?php

namespace Hedronium\Kromo\Algo;

Class SelectionSort {


	protected $input;

	public function sort($input , callable $comparator = null) {

		$this->input = $input;
		$output = [];

			if (is_callable($comparator)) {

				

			}

	}

	public function compValue ($a , $b) {

		return $a - $b;
	}


}