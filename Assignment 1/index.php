<?php

// if statement - executes some code if one condition is true
$age = 20;

if ($age >= 18) {
    echo "You are an adult.";
}
echo "<br>";

// if...else statement - executes some code if a condition is true and another code if that condition is false
$number = 10;

if ($number % 2 == 0) {
    echo "The number is even.";
} else {
    echo "The number is odd.";
}
echo "<br>";

// if...elseif...else statement - executes different codes for more than two conditions
$grade = 1.75;

if ($grade <= 1.00) {
    echo "A+ (Passed)";
} elseif ($grade <= 1.25) {
    echo "A (Passed)";
} elseif ($grade <= 1.50) {
    echo "B+ (Passed)";
} elseif ($grade <= 1.75) {
    echo "B (Passed)";
} elseif ($grade <= 2.00) {
    echo "B- (Passed)";
} elseif ($grade <= 2.25) {
    echo "C+ (Passed)";
} elseif ($grade <= 2.50) {
    echo "C (Passed)";
} elseif ($grade <= 2.75) {
    echo "C- (Passed)";
} elseif ($grade <= 3.00) {
    echo "P (Passed)";
} elseif ($grade == 4.00) {
    echo "INC (Incomplete)";
} elseif ($grade == 5.00) {
    echo "F (Failed)";
} elseif ($grade == 6.00) {
    echo "UW (Unauthorized Withdrawal)";
} else {
    echo "Invalid grade";
}

echo "<br>";

// switch statement - selects one of many blocks of code to be executed
$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    default:
        echo "Weekend";
}

?>