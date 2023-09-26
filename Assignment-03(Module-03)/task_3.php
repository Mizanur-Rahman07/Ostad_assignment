<!-- Task 3: Array Sorting  
Create an array called $grades with the following values: 85, 92, 78, 88, 95. 
Write a PHP function which takes "$grades" as an argument to sort the array in descending 
order and print the sorted grades as array. -->

<?php
$grades = array(85, 92, 78, 88, 95);

function sortGradesDescending($grades) {
    rsort($grades); 
    return $grades;
}

$sortedGrades = sortGradesDescending($grades);
print_r($sortedGrades);
?>

