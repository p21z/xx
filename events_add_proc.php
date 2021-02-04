<?php
    session_start();

    include "perfect_function.php";

    $table_name="events";
    $event_name=$_POST['event_name'];
    $date=$_POST['date'];
    $end=$_POST['end'];
    $venue=$_POST['venue'];

    $user_data=array(
        "event_name" => $event_name ,
        "e_date" => $date ,
        "e_end" => $end ,
        "venue" => $venue

    );

    echo insert($user_data, $table_name);
    $_SESSION['alert_msg']=1;

    // ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID
    $table_name = "events";
    $column = "event_id";

    $user_data=get_last($table_name, $column);
    
        foreach ($user_data as $key => $row) {
            $event_id=$row['event_id'];
            $event_name=$row['event_name'];

            
        }
    
    
    date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $fullname=$_SESSION['firstlast'];
    $user_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Added in events(".$event_id.")";
    
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