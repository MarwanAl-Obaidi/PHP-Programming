<?php

    $numbers = $_GET['numarray'];
    $numarray = explode(',',$numbers);

    $points = implode(" " , $numarray);

	$sum = 0;

	foreach ($numarray as $potency) {
		$sum = $sum + $potency;
	}

	$avg = $sum / count($numarray);

    echo "The points were: $points\n";
    echo "Sum of points: $sum\n";
    echo "Average of points: $avg";
?>
