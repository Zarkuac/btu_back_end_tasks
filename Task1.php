<?php
	$FirstNumber = 5;
	$SecondNumber = 11;
	
	if ($FirstNumber == 0 || $SecondNumber == 0) {
	echo "Try Again!";
	}
	else if ($FirstNumber > 100 || $SecondNumber > 100) {
	  echo "Try Again!";
	}
	else {
	  echo $FirstNumber * $SecondNumber;
	}
?>