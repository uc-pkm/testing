<?php
// Added this line from ubuntu
/*
 * This is the index.php file used to get data and show data
 * author @Prem (uc-pkm)
 */
foreach($user as $item)
{
	if($user['is_admin'])
	{
		$user['admin'] = 1;
	}
	Echo "Item ".$item;
}
// Writing function for educator

function getEducatorList($mentor_guid)
{
	$where = array();
	$where['mentor_guid'] = $mentor_guid;
	$response = getAPIDataJ("cat2.get_mentor_list", $where);
	return $response;
}

// Adding getEducatorStudentRoster function for educator 
function getEducatorStudentRoster($mentor_guid)
{
	$where = array();
	$where['mentor_guid'] = $mentor_guid;
	$response = getAPIDataJ("cat2.get_student_roster", $where);
	return $response;
}

function sendEducatorEmail($mentor_guid)
{
	sendEmail($user);
}  
function sendStudentEmail($user_guid)
{
	
} 
?>
