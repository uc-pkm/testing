<?php
/*
 * This is the index.php file used to get data and show data
 * author @Prem (uc-pkm)
 */
foreach($user as $item)
{
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
	/*
	 * Wrong API is called, please correct it
	 */
	$response = getAPIDataJ("cat2.get_mentor_student_roster", $where);
	return $response;
}  
?>
