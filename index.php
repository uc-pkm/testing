<?php
/*
 * This is the index file
 * Author: PREM
 */
echo "Testing I am committing this file from Ubuntu";
include_once "prepengine-header.php";

/*Testing*/
function checkUser($user)
{
	global $data;
	echo "this is user Auth Module"
	foreach($data as $d)
	{
		echo "This is data:".$d;
	}
}
?>
