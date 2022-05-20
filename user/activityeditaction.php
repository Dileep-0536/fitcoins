<?php 
	include '../db_connection.php';
	if( (!isset($_SESSION['id'])) && $_SESSION['id'] == '') 
    {
        header('Location: ../login.php');
	}
	$inputdate = $_POST['date'];
    $date = date("Y-m-d", strtotime($inputdate)); 
	// make the update query here
	$update_query = "UPDATE `user_activities` set `activity_id`='".$_POST['activity_id']."', `distance`='".$_POST['distance']."', `time`='".$_POST['time']."', `date`='".$date."', `route`='".$_POST['route']."', `city`='".$_POST['city']."' where id='".$_POST['id']."'";
	$result = $conn->query($update_query);
	if ($result) {
		$message = "Activity Updated Successfully";
		echo "<script type='text/javascript'>alert('$message');</script>";
	} else {
		$message = "Failed to Edit Activity";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	header("Location: activities.php");	
?>