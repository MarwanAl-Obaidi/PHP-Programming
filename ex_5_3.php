<?php
	$num1 = trim($_GET["num1"]);
	$num2 = trim($_GET["num2"]);

	$num1 = strip_tags($num1);
	$num2 = strip_tags($num2);

	$product = $num1 * $num2;
	echo "Product: $product\n";

	if ($num2 == "0") {
		echo "Quotient: can't divide by zero";
	} else {
		$quotient = $num1 / $num2;
		echo "Quotient: $quotient";
	}
?>