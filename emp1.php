<?php


$employees = array(
	array('Ali', 29, 3000),
  	array('Khaled', 30, 4000),
  	array('Mohammed', 35, 5000)
);
 
 //array_push([$employee],array([2]) )


 // for eaxample
/*for ($row = 0; $row < count($students); $row++) {
	echo "<p><b>Row number $row</b></p>";
		for ($col = 0; $col < count($students[$row]); $col++) {
		echo $students[$row][$col] . "<br>";
	}
}
*/
//foreach eaxample

foreach ($employees as $employee) {
	echo "<p><b>Employee Information</b></p>";
	foreach ($employee as $key => $value) {
		echo $value . "<br>";
	}
}
array_push($employees, array("2018" => array("2018","dddd","fffff")));

// array_push([$employee],[3], ahmed)
