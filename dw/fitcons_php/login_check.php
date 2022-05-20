<?php 
    include 'db_connection.php';
    $email = $_POST['email'];
    $password = MD5($_POST['password']);
    // check for the mail existence
    $email_query = "SELECT * FROM `users` WHERE `email` = '".$email."'" ;
    $email_res = mysqli_query($conn, $email_query);

    if(mysqli_num_rows($email_res) > 0){

        $password_query = "SELECT * FROM `users` WHERE `email` = '".$email."' AND `password` = '".$password."'" ;
        $password_res = mysqli_query($conn, $password_query);

        if(mysqli_num_rows($password_res) > 0){

            // check for the admin and the user status and the status
            $status_query = "SELECT * FROM `users` WHERE `email` = '".$email."' AND `password` = '".$password."' AND `status` = 1 ";
            $status_res = mysqli_query($conn, $status_query);

            if(mysqli_num_rows($status_res) > 0){

                $data = $status_res -> fetch_assoc();
                $role = $data['role'];
                $_SESSION['role'] = $data['role'];
                $_SESSION['id'] = $data['user_id'];
                $_SESSION['name'] = $data['firstname'];
                if($role == 'admin') {
                    header("Location: admin/dashboard.php");
                }
                if($role == "user"){
                    header("Location: user/dashboard.php");
                }
            }
            else
            {
                $_SESSION['msg'] = "Account Expired";
                header('Location: login.php');
            }
        } else {
            $_SESSION['msg'] = "Invalid Password";
            header('Location: login.php');
        }
    } 
    else
    {
        $_SESSION['msg'] = "Invalid Email";
        header('Location: login.php');
    }
?>