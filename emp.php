<?php

$employees = array(
	array('moahamed salem', 29, 9000),
  	array('mahmoud Khaled', 25, 10000),
  	array('Mohammed mahmoud', 35, 11000)
);
 echo " name is  " .  $employees[0][0] . "  age is  " . $employees[0][1] . " years old and The Salary is  " . $employees[0][2] . "<br>";
echo " name is  " .  $employees[1][0] . "  age is  " . $employees[1][1] . " years old and The Salary is  " . $employees[1][2] . "<br>";
echo " name is  "  . $employees[2][0] . "  age is  " . $employees[2][1] . " years old and The Salary is  " . $employees[2][2] . "<br>";
 
/*echo "<pre>";

print_r($employees);

echo "</pre>";
*/
array_push($employees,"2018","dddd","fffff");

 //array_push([$employee],[3], "ahmed");
 //$samplearray[1]['insertedvalue'] = "Inserted Value";

