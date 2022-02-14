<?php
	$drink = $_GET["drink"];
	$sugar = $_GET["sugar"];
	
	if ($drink == "coffee") {
		if ($sugar == "1") {
			echo "Coffee with sugar!";
		} else {
			echo "Coffee without sugar.";
		}
	} else {
		if ($sugar == "1") {
			echo "Tea with sugar!";
		} else {
			echo "Tea without sugar.";
		}
	}
?>