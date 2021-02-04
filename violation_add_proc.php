<?php
    session_start();

    include "perfect_function.php";

    $table_name="violations";

    $committer_id=$_POST['id'];
    $description=$_POST['description'];
    $date_committed=$_POST['date_committed'];
    $compliance=0;


    $user_data=array(
        "committer_id" => $committer_id, 
        "description" => $description,
        "date_committed" => $date_committed,
        "compliance" => $compliance

    );

    echo insert($user_data, $table_name);
    $_SESSION['alert_msg']=1;
    // $_SESSION['committer_id']=$_POST['id'];
    // echo $committer_id;
    // echo $_SESSION['committer_id'];

    // ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID
    $table_name = "violations";
    $column = "vio_id";

    $user_data=get_last($table_name, $column);
    
        foreach ($user_data as $key => $row) {
            $vio_id=$row['vio_id'];

            
        }
    
    
    date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $fullname=$_SESSION['firstlast'];
    $user_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Added in violations(".$vio_id.")";
    
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

    $header_location = "Location: violation_view.php?id=".$committer_id;
    header($header_location);

    // header("Location: violation_view.php");

?>