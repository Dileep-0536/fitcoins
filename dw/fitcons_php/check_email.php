<?php 
    include 'db_connection.php';
    $mail = $_POST['email'];
    if (!empty($_POST['email'])){

        $sql_email = "SELECT * FROM `users` WHERE `email` = '".$mail."' ";
        $mail_verification = $conn->query($sql_email);
        
		if ($mail_verification->num_rows > 0)
		{
			echo "false";
		}
		else
		{
			echo "true";
		} 
    }       
?> 
