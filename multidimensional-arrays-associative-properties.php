<?php
/*
Students
Name Age Weight
Mark 15 35
Tom 16 65
John 14 45
*/
$students=array(array('Name'=>'Mark','Age'=>15,'Weight'=>35),
            	array('Name'=>'Tom','Age'=>16,'Weight'=>65),
            	array('Name'=>'John','Age'=>14,'Weight'=>45));
echo $students[0]['Name'] . ' ' ;
echo $students[0]['Age'] . ' ' ;
echo $students[0]['Weight'] . ' ' ;
echo $students[1]['Name'] . ' ' ;
echo $students[1]['Age'] . ' ' ;
echo $students[1]['Weight'] . ' ' ;
echo $students[2]['Name'] . ' ' ;
echo $students[2]['Age'] . ' ' ;
echo $students[2]['Weight'] . ' ' ;
?>
