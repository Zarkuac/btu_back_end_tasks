/* გააკეთეთ CLI პროგრამა, რომელშიც მიიღებთ 2 რიცხვს 100–ის ფარგლებში და დააბრუნებთ კონსოლში ნამრავლს, 
თუ რომელიმე რიცხვი მეტი იქნება 100–ზე უნდა დაბეჭდოთ შეცდომის მესიჯი და მოითხოვოთ რიცხვი ხელახლა,
თუ რომელიმე რიცხვი იქნება 0, გათიშეთ პროგრამა
*/

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
