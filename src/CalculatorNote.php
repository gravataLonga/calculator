<?php

namespace Gravatalonga;

class CalculatorNote
{

	protected $list;

	public function add($values = [])
	{
		if (!is_array($values)) {
			$values = [$values];
		}
		$this->list = $values;
	}

	public function operator(\Closure $callback)
	{
		$total = null;
		foreach ($this->list as $key => $item) {
			$total = $callback($item, $key, $total);
        }
        return $total;
	}
}