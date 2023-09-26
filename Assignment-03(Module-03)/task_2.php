
<!-- Task 2: Array Manipulation
Create an array called $numbers containing the numbers 1 to 10. 
Write a PHP function which takes the "$numbers" array as an argument to remove
the even numbers from the array and print the resulting array. -->


<?php 
$numbers = range(1,10);
function removeEvenNumber($numbers) {
  $resultArray = [];
  foreach($numbers as $number) {
    if ($number % 2 != 0):
      $resultArray[] = $number;
     endif;
  }

  print_r($resultArray);
}


removeEvenNumber($numbers);


