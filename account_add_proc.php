<?php
    session_start();

    include "perfect_function.php";

    $table_name="accounts";

    // $acc_id=$_POST['acc_id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $user_type=$_POST['user_type'];

    $user_data=array(
    
        "username" => $username ,
        "password1" => $password ,
        "password2" => $password ,
        "firstname" => $firstname ,
        "middlename" => $middlename ,
        "lastname" => $lastname ,
        "contact" => $contact ,
        "email" => $email ,
        "gender" => $gender ,
        "user_type" => $user_type

    );

    echo insert($user_data, $table_name);
    $_SESSION['alert_msg']=1;

        // ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID
    $table_name = "accounts";
    $column = "acc_id";

    $user_data=get_last($table_name, $column);
    
        foreach ($user_data as $key => $row) {
            $acc_id=$row['acc_id'];

            
        }
    
    
    date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $fullname=$_SESSION['firstlast'];
    $user_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Added in accounts(".$acc_id.")";
    
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

    header("Location: account_manage.php");

?>