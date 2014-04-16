<?php
/*
 * This file contains the all autontication functions
 * 
 */


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