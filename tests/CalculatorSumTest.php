<?php

use Gravatalonga\Calculator;

class CalculatorSumTest extends \PHPUnit_Framework_TestCase
{

	public function test_can_sum_zero_number()
	{
		$calculator = new Calculator();
		$sum = $calculator->sum();

		$this->assertEquals(0, $sum);
	}

	public function test_can_sum_one_number()
	{
		$calculator = new Calculator(10);
		$sum = $calculator->sum();

		$this->assertEquals(10, $sum);
	}

	public function test_can_sum_two_number()
	{
		$calculator = new Calculator(1,2);
		$sum = $calculator->sum();

		$this->assertEquals(3, $sum);
	}

	public function test_can_sum_unknowm_arguments()
	{
		$calculator = new Calculator(1, 2, 3);
		$sum = $calculator->sum();

		$this->assertEquals(6, $sum);
	}
}