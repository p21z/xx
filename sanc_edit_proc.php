<?php
    session_start();
	include "perfect_function.php";

    $table_name = 'sanctions';
    $column = "sanction_id";
    
    echo $_GET['id'];
	//get user ID from URL
	$id = $_GET['id'];
	$sanction_name = $_POST['sanction_name'];
	$quantity = $_POST['quantity'];
	
	$user_editedValues = array(
		"sanction_name" => $sanction_name,
		"quantity" => $quantity 
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
    $action="Edited in sanctions(".$id.")";
    
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

	header("Location: sanc_manage.php");
?>