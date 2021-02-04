<?php
    session_start();

    include "perfect_function.php";

    $table_name="attendance";
    $s_id=$_POST['s_id'];
    $event_id=$_POST['event_id'];
    $event_name=$_POST['event_name'];
    // $stud_name=$_POST['stud_name'];
    $presence=$_POST['presence'];
    

    $user_data=array(
        "s_id" => $s_id ,
        "event_id" => $event_id ,
        "event_name" => $event_name ,
        // "stud_name" => $stud_name ,
        "presence" => $presence

    );

    echo insert($user_data, $table_name);
    $_SESSION['alert_msg']=1;

        // ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID
    $table_name = "attendance";
    $column = "att_id";

    $user_data=get_last($table_name, $column);
    
        foreach ($user_data as $key => $row) {
            $att_id=$row['att_id'];

            
        }
    
    
    date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $fullname=$_SESSION['firstlast'];
    $user_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Added in attendance(".$att_id.")";
    
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

    $header_location="Location: attendance_view.php?id=".$event_id;
    header($header_location);

?>