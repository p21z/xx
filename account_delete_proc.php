<?php
    session_start();
    include "perfect_function.php";

    $table_name = "accounts";

    //get user ID from URL
    $id = $_GET['id'];
    $column = "acc_id";
    delete_from($id, $table_name, $column);
    $_SESSION['alert_msg']=3;

     // ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID
    
    date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $fullname=$_SESSION['firstlast'];
    $user_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Deleted in accounts(".$id.")";
    
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