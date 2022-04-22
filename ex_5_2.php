<?php
	$num = trim($_GET["num"]);
	$num = strip_tags($num);

	if ($num < 0) {
		echo "The number has to be at least zero!";
	} else {
		while ($num >= 0) {
			if ($num == 0) {
                		echo "$num";
            		} else {
                		echo "$num ";
            		}
           		$num--;
		}
	}
?>