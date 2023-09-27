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

        if ($average>=90) {
            echo "The average mark for {$student} : {$average}\n  Your gread is Golden A+" ;
        }elseif ($average>=80) {
            echo "The average mark for {$student} : {$average}\n  Your gread is A+";
        
        }elseif ($average>=70) {
            echo "The average mark for {$student} : {$average}\n  Your gread is A-";
        
        }elseif ($average>=60) {
            echo "The average mark for {$student} : {$average}\n  Your gread is B";
        
        }elseif ($average>=50) {
            echo "The average mark for {$student} : {$average}\n  Your gread is C";
        
        }elseif ($average>=40) {
            echo "The average mark for {$student} : {$average}\n  Your gread is D";
        
        }else {
            echo "The average mark is{$student} : {$average}\n  Your gread is F";
        }
       
    }
}

calculateAndPrintAverageGrades($studentGrades);
?>
