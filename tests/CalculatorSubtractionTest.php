<?php

use Gravatalonga\Calculator;

class CalculatorSubtractionTest extends \PHPUnit_Framework_TestCase
{

    public function test_can_subtract()
    {
        $calculator = new Calculator(2);
        $sub = $calculator->sub();

        $this->assertEquals(2, $sub);
    }

    public function test_can_subtract_two_number()
    {
        $calculator = new Calculator(10, 2);
        $sub = $calculator->sub();

        $this->assertEquals(8, $sub);
    }

    public function test_can_subtract_three_number()
    {
        $calculator = new Calculator(30, 10, 10);
        $sub = $calculator->sub();

        $this->assertEquals(10, $sub);
    }
}