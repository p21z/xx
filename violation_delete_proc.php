<?php
    session_start();
    include "perfect_function.php";

    $table_name = "violations";

    //get user ID from URL
    $id = $_GET['id'];
    $id2 = $_GET['id2'];
    $column = "vio_id";
    delete_from($id2, $table_name, $column);
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
    $action="Deleted in violations(".$id2.")";
    
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


    $header_location= "Location: violation_view.php?id=".$id;
    header($header_location);

?>