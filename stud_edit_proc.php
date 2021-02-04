<?php
    session_start();
	include "perfect_function.php";

	$table_name = 'students';

	//get user ID from URL
	$id=$_POST['id'];
    $year_level=$_POST['year_level'];
    $program=$_POST['program'];
    $section=$_POST['section'];
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $officer=$_POST['officer'];
    $gender=$_POST['gender'];
	
	$user_editedValues = array(
		"id" => $id,
        "year_level" => $year_level,
        "program" => $program,
        "section" => $section,
        "firstname" => $firstname,
        "middlename" => $middlename,
        "lastname" => $lastname,
        "email" => $email,
        "contact" => $contact,
        "officer" => $officer,
        "gender" => $gender
	);

    update($user_editedValues, $id, $table_name);
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
    $action="Edited in students(".$id.")";
    
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

	header("Location: stud_manage.php");
?>