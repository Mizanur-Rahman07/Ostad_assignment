<?php 

// Task 3: Break on Condition
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
// Fibonacci number is greater than 100, break out of the loop using the break statement.

$first = 0;
$second = 1; 
$next = 1;

for ($i=0; $i<10; $i++) {
  if ($first > 100 ) {
    break;
  }
  echo $first." ";
  $second = $next;
  $next = $first + $second;
  $first = $second;
}

echo PHP_EOL;
echo PHP_EOL;
?>
