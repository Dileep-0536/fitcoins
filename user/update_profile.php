<?php 
	include '../db_connection.php';
	if( (!isset($_SESSION['id'])) && $_SESSION['id'] == '') 
    {
        header('Location: ../login.php');
	}
    $user_id = $_SESSION['id']; 
    $inputdate = $_POST['dob'];
    $date = date("Y-m-d", strtotime($inputdate)); 
    //post data
    // make the update query
    $query = "UPDATE `users` SET `firstname`='".$_POST['firstname']."',`lastname`='".$_POST['lastname']."',`mobile`='".$_POST['mobile']."',`email`='".$_POST['email']."',`city`='".$_POST['city']."',`dob`='".$date."',`gender`='".$_POST['gender']."' WHERE `user_id` = '".$_POST['user_id']."' ";
    // echo $query;die;
    $res = $conn->query($query);
    if($res) {
    	$_SESSION['msg'] = "updated Successfully";
    } else {
    	$_SESSION['msg'] = "Failed To Update";
    }
    header("Location: profile.php");
	
?> 