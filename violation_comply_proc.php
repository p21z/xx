<?php
    session_start();
	include "perfect_function.php";

	$table_name = 'violations';
	$condition = 'vio_id';

	//get user ID from URL
	$id=$_GET['id'];
	$compliance=1;
	
	$user_editedValues = array(
		"vio_id" => $id,
        "compliance" => $compliance
	);

	update_from($user_editedValues, $id, $table_name, $condition);
    $_SESSION['alert_msg']=4;

	        // ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID
    
    date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $fullname=$_SESSION['firstlast'];
    $user_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Edited in violations(".$id.")";
    
    $user_data=array(
        "username" => $username ,
        "fullname" => $fullname ,
        "user_type" => $user_type ,
        "xdate" => $xdate ,
        "xtime" => $xtime ,
        "action" => $action 

    );

    echo insert($user_data, $table_name);
    
// ______________________________________________________________________________________________________________________

	header("Location: violation_view.php");
?>