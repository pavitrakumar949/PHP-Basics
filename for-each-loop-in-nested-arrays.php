<?php
$students=array(array('Name'=>'Mark','Age'=>15,'Weight'=>35),
       		 array('Name'=>'Tom','Age'=>16,'Weight'=>65),
       		 array('Name'=>'John','Age'=>14,'Weight'=>45));
foreach($students as $student=>$innerarray)
{
	foreach($innerarray as $items)          // For each loop in nested arrays
	{
    	echo $items . ' ';
	}
}
?>


