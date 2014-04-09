<?php
/*
 * This file contains the all autontication functions
 * 
 */

function getUserList()
{
	$user_list = array("u0001","u0001");
	return $user_list; 
}
function isValidUser($user)
{
	$user_list = getUserList();
	if(inArray($user['user_guid'], $user_list))
	{
		return 1;
	}
	return 0;
} 
 
?>