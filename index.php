<?php
echo "This is new line";
echo "This is new line";
echo "hi";
//print_r(phpinfo());  This is commented for security reasons.

function displayData($data)
{
	foreach($data as $i)
	{
		echo "THIS IS LINE NO:".$i;
	}
}

function displayTable($i){
	echo "Table of :" . $i;
	for($j = 1; $j <= 10; $j++){
		echo $i . "*" . $j . " = " . $i * $j . "<br />";
	}
}

displayTable(2);

?>
