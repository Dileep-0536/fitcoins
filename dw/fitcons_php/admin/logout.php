<?php 
    include '../db_connection.php';
    session_destroy();
    header('Location: ../login.php');
?>    