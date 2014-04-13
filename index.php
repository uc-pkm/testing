<?php
echo "this is user Auth Module"
function checkUser($user)
{
	if(isset($user['user_guid']) && $user['user_guid']<>"")
	{
		return true;
	}
}
?>
