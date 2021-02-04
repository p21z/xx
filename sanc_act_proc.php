<?php
    session_start();
	include "perfect_function.php";

	$table_name = 'sanctions';
	$condition = 'sanction_id';

	//get user ID from URL
	$id=$_GET['id'];
	$status=0;
	
	$user_editedValues = array(
        "status" => $status
	);

	update_from($user_editedValues, $id, $table_name, $condition);
    $_SESSION['alert_msg']=5;

	        // ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID
    
    date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $fullname=$_SESSION['firstlast'];
    $user_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Activated sanction(".$id.")";
    
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

	header("Location: sanc_inactive_manage.php");
?>