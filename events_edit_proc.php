<?php
    session_start();
	include "perfect_function.php";

    $table_name = 'events';
    $column = "event_id";
    
    echo $_GET['id'];
	//get user ID from URL
	$id = $_GET['id'];
	$event_name = $_POST['event_name'];
	$date = $_POST['date'];
    $end=$_POST['endx'];
    $venue=$_POST['venue'];
	
	$user_editedValues = array(
		"event_name" => $event_name,
		"e_date" => $date ,
        "e_end" => $end ,
        "venue" => $venue ,
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
    $action="Edited in events(".$id.")";
    
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

	header("Location: events_manage.php");
?>