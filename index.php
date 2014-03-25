<?php
echo "This is new line";
echo "This is new line";
echo "hi";
//print_r(phpinfo());  This is commented for security reasons.

function displayData($data)
{
	foreach($data as $i)
	{
		echo "This is line no:".$i;
	}
}

function displayTable($i){
	echo "Table of :" . $i . "<br />";;
	$i = 0;
	$j = 0;
	while($j<=10){
		echo "row" . $i . "*" . $j . " = " . $i * $j . "<br />";
	}
}
echo "Removed error";
displayTable(2);
?>
