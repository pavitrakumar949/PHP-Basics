<?php
$grade='c';     //switch statement with letters
switch($grade)      
{
	case 'A':
	case 'a':
	echo "Excellent";
	break;
	case 'B':
	case 'b':
	echo "Good";
	break;
	case 'C':
	case 'c':
	echo "Needs Improvement";
	break;
	default:
	echo "No grades found";
	break;
}
?>
