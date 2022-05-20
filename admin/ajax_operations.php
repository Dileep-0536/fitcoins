<?php 
include '../db_connection.php';

if (isset($_POST['action'])) {
	$action = $_POST['action'];
	if ($action == "delete_user") {
		$user_id = $_POST['user_id'];
		$query = "DELETE FROM `user_activities` WHERE user_id='$user_id' ";
		$activities_res = $conn->query($query);
		$query = "DELETE FROM `users` WHERE user_id='$user_id' ";
		$result = $conn->query($query);
		if ($result) {
			$users_list = get_users();
		}
		echo json_encode($users_list);
	}
}

function get_users()
{
	$users_arr=[];
	$key = 0;
	$query = "SELECT * FROM `users` WHERE `role` = 'user' ";
	$result = $GLOBALS['conn']->query($query);
	while( $row = $result->fetch_assoc() ){
		$users_arr[$key]['user_id'] = $row['user_id'];
		$users_arr[$key]['firstname'] = $row['firstname'];
		$users_arr[$key]['lastname'] = $row['lastname'];
		$users_arr[$key]['mobile'] = $row['mobile'];
		$users_arr[$key]['email'] = $row['email'];
		$users_arr[$key]['city'] = $row['city'];
		$users_arr[$key]['dob'] = $row['dob'];
		$users_arr[$key]['gender'] = $row['gender'];
		$users_arr[$key]['status'] = $row['status'];
		$key++;
	}

	return $users_arr;
}
?>