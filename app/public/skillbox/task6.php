<?php 
$rand_number = rand(1, 1000000);

$number = substr($rand_number, -1);

if ($number == 0) {
    $term = "ов";
} elseif ($number == 1 ) {
    $term = "";
} elseif ($number > 1 ) {
	if ($number > 4 ) {
    	$term = "ов";
	} else $term = "а";
}

echo  'на учебе: ' .$rand_number.' студент'.$term;