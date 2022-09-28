<?php
  $number = readline("Input Number 1: ");
  $number2 = readline("Input Number 2: ");
  
  if ($number == 0 || $number2 == 0) {
	exit("The Number Must Not Be Zero");
	}
	else if ($number > 100 || $number2 > 100) {
	  echo "Try Again!";
	}
	else {
	  echo $number2 * $number;
	}
?>
