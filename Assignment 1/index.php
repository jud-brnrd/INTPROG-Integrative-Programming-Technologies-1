<?php

// if statement - executes some code if one condition is true
$name = "Jude";

if ($name == "Jude") {
    echo "Hey Jude.";
}
echo "<br>";

// if...else statement - executes some code if a condition is true and another code if that condition is false
$age = 22;

if ($age < 18) {
    echo "Discover your purpose in life.";
} else {
    echo "Time to lock in twin";
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
$ulam = 3;

switch ($ulam) {
    case 1:
        echo "Adobo";
        break;
    case 2:
        echo "Sinigang";
        break;
    case 3:
        echo "Adobong Sitaw";
        break;
    case 4:
        echo "Dinosaour Egg";
        break;
    case 5:
        echo "Paksiw";
        break;
    default:
        echo "Fried Chicken";
}

?>
