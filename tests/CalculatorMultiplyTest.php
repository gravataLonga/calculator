<?php

use Gravatalonga\Calculator;

class CalculatorMultiplyTest extends \PHPUnit_Framework_TestCase
{

	public function test_multiply()
	{
		$calculator = new Calculator(3);
		$result = $calculator->multiply();

		$this->assertEquals(3, $result);
	}

	public function test_multiply_three_number()
	{
		$calculator = new Calculator(3, 2, 1);
		$result = $calculator->multiply();

		$this->assertEquals(6, $result);
	}

	public function test_multiply_zero_number()
	{
		$calculator = new Calculator();
		$result = $calculator->multiply();

		$this->assertEquals(0, $result);
	}

}