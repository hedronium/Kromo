<?php

namespace Hedronium\Kromo\Sorters;
use Hedronium\Kromo\Sorter;

Class CubeSort extends Sorter {

	
	protected $input;

	public function sort(&$input , callable $comparator = null )
	{

		$this->input = $input;
		
		$this->validateInput($this->input);
		$comparator = static::getComparator($comparator);

		


	}


}