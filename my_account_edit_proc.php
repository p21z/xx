<?php
    session_start();
	include "perfect_function.php";

    $table_name = 'accounts';
    $column = "acc_id";
    
    echo $_GET['id'];
	//get user ID from URL
	$id = $_GET['id'];
    
            $username=$_POST['username'];
            $firstname=$_POST['firstname'];
            $middlename=$_POST['middlename'];
            $lastname=$_POST['lastname'];
            $contact=$_POST['contact'];
            $email=$_POST['email'];
            $user_type=$_POST['user_type'];
	
	$user_editedValues = array(
        "username" => $username ,
        "firstname" => $firstname ,
        "middlename" => $middlename ,
        "lastname" => $lastname ,
        "contact" => $contact ,
        "email" => $email ,
		"user_type" => $user_type 
	);

    update_from($user_editedValues, $id, $table_name, $column);
    $_SESSION['alert_msg']=2;

    $_SESSION['firstlast']=$firstname." ".$lastname;

	header("Location: my_account_manage.php");
?>