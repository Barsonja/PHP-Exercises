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


	public function add()
	{
		return $this->number1 + $this->number2;
	}

	public function subtract()
	{
		return $this->number1 - $this->number2;
	}

	public function multiply()
	{
		return $this->number1 * $this->number2;
	}

	public function divide()
	{
		if ($this->number2 == 0) {
			return "Undefined Error: Can't divide by 0.";
		} else {
			return $this->number1 / $this->number2;
		}
	}

	public function power()
	{
		return $this->number1 ** $this->number2;
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