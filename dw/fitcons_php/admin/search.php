<?php
	include '../db_connection.php';
    if( (!isset($_SESSION['id'])) && $_SESSION['id'] == '') 
    {
        header('Location: ../login.php');
	}
	// get the post data
	$activity_id = $_POST['activity_id'];
	$user_id = $_POST['user_id'];
	$date = $_POST['date'];
	$where = '';
	$query = "";
	$list_key = 0;
	$list = array();
	// condition for activity id
	if($activity_id == "all"){
		$where .= "user_activities.status = 1";
	} else {
		$where .= "user_activities.activity_id =".$activity_id;
	}
	// condition for activity id
	if($user_id !== "all"){
		$where .= " AND user_activities.user_id =".$user_id;
	}
	// condition for date
	if($date){
		$inpdate = date("Y-m-d", strtotime($date));
		$where .= " AND user_activities.date =".$inpdate;
	}
	
	$query = "SELECT * FROM `user_activities` JOIN `users` ON users.user_id=user_activities.user_id JOIN `activities` ON activities.activity_id=user_activities.activity_id where '".$where."' ORDER BY user_activities.date DESC";
	$res = $conn->query($query);
	while($row = $res->fetch_assoc()) {
        $list[$list_key]['id'] = $row['id'];
        $list[$list_key]['user_name'] = $row['firstname']." ".$row['lastname'];
        $list[$list_key]['name'] = $row['name'];
        $list[$list_key]['time'] = $row['time'];
        $list[$list_key]['date'] = $row['date'];
        $list[$list_key]['distance'] = $row['distance'];
        $list[$list_key]['activity_id'] = $row['activity_id'];
        $list[$list_key]['user_id'] = $row['user_id'];
        $list[$list_key]['route'] = $row['route'];
        $list_key++;
    }
    echo json_encode($list);
	

?>