<?php
function calculateResult($marks) {
    
    for ($i = 0; $i < count($marks); $i++) {
        if ($marks[$i] < 0 || $marks[$i] > 100) {
            echo "Mark range is invalid.\n";
            return;
        }
    }

  
    for ($i = 0; $i < count($marks); $i++) {
        if ($marks[$i] < 33) {
            echo "The student has failed.\n";
            return;
        }
    }

    
    $total = 0;
    for ($i = 0; $i < count($marks); $i++) {
        $total += $marks[$i];
    }
    $average = $total / count($marks);

    
    switch (true) {
        case ($average >= 80):
            $grade = 'A+';
            break;
        case ($average >= 70):
            $grade = 'A';
            break;
        case ($average >= 60):
            $grade = 'A-';
            break;
        case ($average >= 50):
            $grade = 'B';
            break;
        case ($average >= 40):
            $grade = 'C';
            break;
        case ($average >= 33):
            $grade = 'D';
            break;
        default:
            $grade = 'F';
    }

   
    echo "Total Marks: $total\n";
    echo "Average Marks: $average\n";
    echo "Grade: $grade\n";
}


$marks = [88, 77, 66, 88, 99]; 
calculateResult($marks);