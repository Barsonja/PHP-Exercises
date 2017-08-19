<?php

class Calculator
{
	public $number1;
	public $number2;

	public function __construct($number1, $number2)
	{
		$this->number1 = $number1;
		$this->number2 = $number2;
	}


	public function add($number1, $number2)
	{
		return $number1 + $number2;
	}

	public function subtract($number1, $number2)
	{
		return $number1 - $number2;
	}

	public function multiply($number1, $number2)
	{
		return $number1 * $number2;
	}

	public function divide($number1, $number2)
	{
		return $number1 / $number2;
	}

	public function power($number1, $number2)
	{
		return $number1 ** $number2;
	}

	public function factorial($number)
	{
		if ($number < 2){
			return 1;
		}
		else {
			return $number * $this->factorial($number - 1);
		}
	}
}


?>