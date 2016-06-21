<?php

namespace Hedronium\Kromo\Algo;

Class MergeSort 
{

	protected $input;

	public function sort($input , callable $comparator) 
	{

		$this->input = $input;
		$length = count($this->input) - 1;

			if ($length < 2) {

				return $this->input;
			
				} else {

				$mid  = (int)($length / 2);
				$left = [];
				$right = [];
				$limit = $mid - 1;
				
					for ($i = 0; $i <= ; $i++) {

						$left[] = $this->input[$i];
					
					}

					for ($i = $mid; $i <= $mid; $i++) {

						$left[] = $this->input[$i];
					
					}

										


			}

	}


}