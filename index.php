<?php
/*
 * This is the index file
 * Author: PREM
 */
echo "This is from local master file";
include_once "prepengine-header.php";

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
