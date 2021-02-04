<?php
    session_start();
	include "perfect_function.php";

    $table_name = 'schoolyear';
    $column = "sy_id";
    
    echo $_GET['id'];
	//get user ID from URL
	$id = $_GET['id'];
	$start = $_POST['start'];
    $end = $_POST['end'];
    
    if ((strtotime($end)<time())||(strtotime($start)>time())){
        $status=1;
    } else {
        $status=0;
    }
    echo $status;
	
	$user_editedValues = array(
		"start" => $start ,
        "end" => $end ,
        "status" => $status
	);

    update_from($user_editedValues, $id, $table_name, $column);
    $_SESSION['alert_msg']=2;

	header("Location: sy_manage.php");
?>