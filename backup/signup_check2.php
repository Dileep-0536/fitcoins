<?php 
    include 'db_connection.php';
    // format the date to required format
    $birth = $_POST['dob'];
    $dob = date("Y-m-d", strtotime($birth)); 

    $insert_query = "INSERT INTO `users`(`firstname`, `lastname`, `mobile`, `email`, `city`, `password`, `dob`, `gender`) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['city']."','".$_POST['password']."','".$dob."','".$_POST['gender']."')";
    $result = $conn->query($insert_query);
    if($result){
        $_SESSION['msg'] = "Registered Successfully, Please Login"; 
    } else {
        $_SESSION['msg'] = "Failed to Register internel Server issue"; 
    }
    header('Location: login.php');
?> 