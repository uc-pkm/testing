<?php
include_once "login.functions.php";

function checkuser($user)
{
	if(isset($user['user_guid']) && $user['user_guid']<>"")
	{
		return 1;
	}
	return 0;
}
function is_admin()
{
	return true;
}
?>