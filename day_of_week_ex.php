<?php 


// Description:

// Write a program to show day of the week (for example: Monday) based on numbers using switch/case statements.

// Conditions:

// You can pass 1 to 7 number in switch
// Day 1 will be considered as Monday
// If number is not between 1 to 7, show invalid number in default
// View Solution/Program



$day = "7";

switch ($day) {
    case "1":
        echo "It is Monday!";
        break;
    case "2":
        echo "It is today!";
        break;
    case "3":
        echo "It is Wednesday!";
        break;
	case "4":
        echo "It is Thursday!";
        break;
    case "5":
        echo "It is Friday!";
        break;
    case "6":
        echo "It is Saturday!";
        break;
	case "7":
        echo "It is Sunday!";
        break;
    default:
        echo "Invalid number!";
}
?>