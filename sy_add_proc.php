<?php
    session_start();

    include "perfect_function.php";

    $table_name="schoolyear";
    $start=$_POST['start'];
    $end=$_POST['end'];

    if ((strtotime($end)<time())||(strtotime($start)>time())){
        $status=1;
    } else {
        $status=0;
    }
    echo $status;

    $user_data=array(
        "start" => $start ,
        "end" => $end ,
        "status" => $status

    );

    echo insert($user_data, $table_name);
    $_SESSION['alert_msg']=1;

    
    header("Location: sy_manage.php");

?>