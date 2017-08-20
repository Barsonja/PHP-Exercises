<?php
require_once "calculator.php";

$message = null;
if (isset($_GET['form_submit'])) {
	$var1 = $_GET['var1'][0];
	$var2 = $_GET['var2'][0];
	$operation = (!empty($_GET['operation'][0]) ? $_GET['operation'][0] : null);
	$result;
	$calc = new Calculator($var1, $var2);

	switch ($operation) {
		case 'add': $result  = $calc->add();break;
		case 'subtract': $result = $calc->subtract();break;
		case 'multiply': $result = $calc->multiply();break;
		case 'divide': $result = $calc->divide();break;
		case 'power': $result = $calc->power();break;
		case 'factorial': $result = $calc->factorial($var1);break;
		default: echo("Error!"); exit(); break;
	}

	switch ($operation) {
		case 'add': $message = $var1 . " + " . $var2 . " = " . $result;break;
		case 'subtract': $message = $var1 . " - " . $var2 . " = " . $result;break;
		case 'multiply': $message = $var1 . " * " . $var2 . " = " . $result;break;
		case 'divide': $message = $var1 . " divided by " . $var2 . " = " . $result;break;
		case 'power': $message = $var1 . " to the power of " . $var2 . " = " . $result;break;
		case 'factorial': $message = $var1 . "! " . " = " . $result;break;
		default: echo("Error!"); exit(); break;
	}
}

?>

<form action="maths.php" method="get">
	<p>Please enter two numbers and select an operation.</p>
	<label for="var1[]">Enter the first number:</label>
	<input type="number" name="var1[]"><br>
	<label for="var1[]">Enter the second number:</label>
	<input type="number" name="var2[]"><br>
	<label for="operation[]">Select an operation!</label><br>
	<select multiple="multiple" name="operation[]">
		<option value="add">Add the numbers</option>
		<option value="subtract">Subtract the numbers</option>
		<option value="multiply">Multiply the numbers</option>
		<option value="divide">Divide the numbers</option>
		<option value="power">First number to the power of the second</option>
		<option value="factorial">Factorial of the first number</option>
	</select><br>
	<input type="submit" name="form_submit" value="Submit"/>
</form>

<?php if ($message != null) {
	echo "<p> Query result: " . $message . "</p>";
	} ?>