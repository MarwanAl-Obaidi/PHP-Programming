<?php
	$name = trim($_GET["name"]);
	$msg = trim($_GET["msg"]);

	$name = strip_tags($name);
	$msg = strip_tags($msg);

	if ($name == "" || $msg == "") {
		echo "You didn't fill all fields!";
	} else {
		echo $name . ": " . $msg;
	}
?>