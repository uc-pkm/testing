<?php
echo "This is new line";
echo "This is new line";
echo "hi";
print_r(phpinfo());

function displayData($data)
{
	foreach($data as $i)
	{
		echo "This is line no:".$i;
	}
}

?>
