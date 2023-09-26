<!-- Task 4: Multidimensional Array
Create a multidimensional array called $studentGrades to store the grades of three students. 
Each student has grades for three subjects: Math, English, and Science. 
Write a PHP function which takes "$studentGrades" as an argument to calculate and print 
the average grade for each student. -->


<?php

$studentGrades = [
    "Mizan" => ["Math"=>90, "English"=>85, "Science"=>78],
    "Sakib" => ["Math"=>80, "English"=>94, "Science"=>71],
    "Bubli" => ["Math"=>87, "English"=>65, "Science"=>56]
  ];


function calculateAndPrintAverageGrades($studentGrades) {
    foreach ($studentGrades as $student=>$grades) {
        $average = array_sum($grades) / count($grades);
        echo "The average grade for  {$student} : {$average}\n";
    }
}

calculateAndPrintAverageGrades($studentGrades);
?>
