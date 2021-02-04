<?php
    session_start();
	include "perfect_function.php";

    $table_name = 'attendance';
    $column = "att_id";
    
    echo $_GET['id'];
	//get user ID from URL
    $id = $_GET['id'];
    $id2 = $_GET['id2'];
    
	$s_id = $_POST['s_id'];
	$presence = $_POST['presence'];
	
	$user_editedValues = array(
		"s_id" => $s_id,
		"presence" => $presence
	);

    update_from($user_editedValues, $id, $table_name, $column);
    $_SESSION['alert_msg']=2;

            // ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID
    
    date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $fullname=$_SESSION['firstlast'];
    $user_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Edited in attendance(".$id.")";
    
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

    $form_location = "Location: attendance_view.php?id=".$id2;
	header($form_location);
?>