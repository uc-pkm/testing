<?php
echo "THIS IS EXAMPLE OF GIT";
function checkUser($user)
{
	if(isset($user['user_guid']) && $user['user_guid']<>"")
	{
		return true;
	}
}
?>
