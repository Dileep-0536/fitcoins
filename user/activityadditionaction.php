<?php 
	include '../db_connection.php';
	if( (!isset($_SESSION['id'])) && $_SESSION['id'] == '') 
    {
        header('Location: ../login.php');
	}
	$inputdate = $_POST['date'];
    $date = date("Y-m-d", strtotime($inputdate)); 
	// make the insert query here
	$insert_query = "INSERT INTO `user_activities`(`id`, `user_id`, `activity_id`, `distance`, `time`, `date`, `route`, `city`) VALUES (NULL,'".$_POST['user_id']."','".$_POST['activity_id']."','".$_POST['distance']."','".$_POST['time']."','".$date."','".$_POST['route']."','".$_POST['city']."')";
	$result = $conn->query($insert_query);
	// if ($result) {
	// 	$message = "Activity Added Successfully";
	// 	echo "<script type='text/javascript'>alert('$message');</script>";
	// } else {
	// 	$message = "Failed to Add Activity";
	// 	echo "<script type='text/javascript'>alert('$message');</script>";
	// }
	header("location: activities.php");	
?>