<?php
	include '../db_connection.php';
	$id = $_POST['id'];
	$status = $_POST['status'];
	if($status == '1'){
		$set_status = '0';
	}
	if ($status == '0') {
		$set_status = '1';
	}

	// made the Update Query 
	$query = "UPDATE `users` SET `status`='".$set_status."' WHERE `user_id`= '".$id."'";
	$res = $conn->query($query);
	if($res){
		echo "true";	
	} else {
		echo "false";
	}
?>