<?php

function calculateCircleRadius($number) {
    return $number / 3;
}

function calculateCircleArea($radius) {
    return 3.14 * pow($radius, 2);
}

function calculateCircleCircumference($radius) {
    return 2 * 3.14 * $radius;
}

function calculateRectangleWidth($length, $width) {
    return $length * $width;
}

for ($i = 1; $i <= 100; $i++) {
    $output = $i . ". ";

    if ($i % 3 == 0 && $i % 5 == 0) {
        $rectangleLength = $i / 3;
        $rectangleWidth = $i / 5;
        $rectangleArea = calculateRectangleWidth($rectangleLength, $rectangleWidth);
        $output .= "| " . $rectangleArea;
    } elseif ($i % 5 == 0) {
        if ($i % 3 == 0) {
            $output .= "| ";
        }
        $circumferenceRadius = $i / 5;
        $circumference = 2 * 3.14 * $circumferenceRadius;
        $output .= $circumference;
    } elseif ($i % 3 == 0) {
        $circleRadius = calculateCircleRadius($i);
        $circleArea = calculateCircleArea($circleRadius);
        $output .= $circleArea;
    }
    else{
        $output .= "00";
    }

    echo $output . "<br>";
}
?>
