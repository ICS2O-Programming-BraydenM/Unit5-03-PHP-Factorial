<?php
	// initialize counter to 1 and factorial to 1 
	$counter = 1;
  $facAnswer = 1;
	
	// get a positive integer from the user 
	$userNum = intval($_POST["userNum"]);

  // use a do..while loop to calculate the factorial of a number 
	do {
   $facAnswer = $facAnswer * $counter ;
   //increment the counter 
   $counter = $counter + 1;
  } while ($counter <= $userNum);

  	// display result back to user 
	  echo "The factorial of this positive integer is " . "$facAnswer";
?>