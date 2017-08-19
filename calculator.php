<?php

class Calculator
{
	public $number1;
	public $number2;


	public function add($number1, $number2)
	{
		return $number1 + $number2;
	}

	public function multiply($number1, $number2)
	{
		return $number1 * $number2;
	}

	public function exponent($number1, $number2)
	{
		$result = 1;
		for ($i = 1; $i <= $number2; $i++) {
			$result *= $number1;
		}
		return $result;
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

$c = new Calculator();
echo $c->add(2,5).'<br>';
echo $c->multiply(14,5).'<br>';
echo $c->exponent(2,6).'<br>';
echo $c->power(2,6).'<br>';
echo $c->factorial(6).'<br>';

?>