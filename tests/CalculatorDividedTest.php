<?php

use Gravatalonga\Calculator;

class CalculatorDividedTest extends \PHPUnit_Framework_TestCase
{

	public function test_divied()
	{
		$calculator = new Calculator(2, 1);
		$result = $calculator->divided();

		$this->assertEquals(2, $result);
	}

	public function test_divied_three_number()
	{
		$calculator = new Calculator(10, 5);
		$result = $calculator->divided();

		$this->assertEquals(2, $result);
	}

	public function test_divied_zero_number()
	{
		$calculator = new Calculator();
		$result = $calculator->divided();

		$this->assertEquals(0, $result);
	}

}