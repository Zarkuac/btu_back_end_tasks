<?php
	$FirstNumber = 5;
	$SecondNumber = 11;
	
	if ($FirstNumber == 0 || $SecondNumber == 0) {
	exit("The Number Must Not Be Zero");
	}
	else if ($FirstNumber > 100 || $SecondNumber > 100) {
	  echo "Try Again!";
	}
	else {
	  echo $FirstNumber * $SecondNumber;
	}
?>
