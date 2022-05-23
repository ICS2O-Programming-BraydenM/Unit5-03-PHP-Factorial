<?php
	// get user input (both positive integers)
	$firstNum = intval($_POST["firstNum"]);
  $secondNum = intval($_POST["secondNum"]);

	// initialize product as zero
	$product = 0;

  // use a for loop to calculate product of two positive integers solely using addition 
	for ($counter = 1; $counter <= $secondNum; $counter++) {
    $product = $product + $firstNum;
  }

  	// display result back to user 
	  echo "The product of these two positive integers is " . "$product";
?>