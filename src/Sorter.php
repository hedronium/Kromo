<?php
namespace Hedronium\Kromo;

abstract class Sorter implements SorterInterface
{
	protected static $default_comparator = null;

	protected static function getComparator($comparator)
	{
		if (is_callable($comparator)) {
			return $comparator;
		}

		if (!static::$default_comparator) {
			static::$default_comparator = function (&$a, &$b) {
			  if ($a == $b) {
			    return 0;
			  }

			  return $a > $b ? 1 : -1;
			};
		}

		return static::$default_comparator;
	}

	protected function validateInput(&$input)
	{

		if (!($input instanceof \ArrayAccess) && !is_array($input)) {
			
			throw new \Exception('Invalid Input Type. Must be an array or an object implementing ArrayAccess');
		}

		return true;
	}
}
