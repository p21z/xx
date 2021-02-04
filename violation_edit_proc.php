<?php
    session_start();
	include "perfect_function.php";

    $table_name = 'violations';
    $column = "vio_id";
    
    echo $_GET['id'];
	//get user ID from URL
    $id = $_GET['id'];
    $id2 = $_GET['id2'];
    
	$description = $_POST['description'];
	$date_committed = $_POST['date_committed'];
    $compliance = $_POST['compliance'];
    
	$user_editedValues = array(
		"description" => $description,
        "date_committed" => $date_committed,
        "compliance" => $compliance
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

    $form_location = "Location: violation_view.php?id=".$id2;
	header($form_location);
?>