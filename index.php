<?php
echo "<h1>This is new line</h1>";
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
	echo "Table of :" . $i . "<br />";;
	$i = 0;
	$j = 0;
	while($j<=10){
		echo "row => " . $i . "*" . $j . " = " . $i * $j . "<br />";
	}
}
echo "Removed error";
displayTable(2);
echo "added";

echo "Hello this is added today by deepika";
?>
