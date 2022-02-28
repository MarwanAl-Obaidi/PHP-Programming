<?php


    $text = "Special characters marked with a backslash (\) can be used inside quotation marks (\" and \").";
    $a = array (9,7,5);
	$count = count($a);
	$animal = "Cat";


    $output = implode(",", $a);
    echo $text;
    echo "I bought $count {$animal}s.\n";
    echo "Array content: $output";

?>