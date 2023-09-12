<?php
    $scoreOne = 90;
    $scoreTwo = 80;
    $scoreThree = 85;
    $average = ($scoreOne + $scoreTwo + $scoreThree) / 3;

    $grade = "";
    if ($average >=90) {
        $grade = "A+";
    } else if ($average >= 80) {
        $grade = "A";
    }else if ($average >= 70) {
        $grade = "A-";
    }else if ($average >= 60) {
        $grade = "B";
    }else if ($average >= 50) {
        $grade = "C";
    }else if ($average >= 40) {
        $grade = "D";
    }else {
        $grade = "F";
    }
    echo "<p> Test Scores: $scoreOne , $scoreTwo , $scoreThree \n " . "Grade: $grade </p>";
    echo "<p> Avarage Score: $average </p>";

