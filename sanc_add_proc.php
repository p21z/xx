<?php
    session_start();

    include "perfect_function.php";

    $table_name="sanctions";
    $sanction_name=$_POST['sanction_name'];
    $quantity=$_POST['quantity'];
    

    $user_data=array(
        "sanction_name" => $sanction_name ,
        "quantity" => $quantity

    );

    echo insert($user_data, $table_name);
    $_SESSION['alert_msg']=1;



// ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID
    $table_name = "sanctions";
    $column = "sanction_id";

    $user_data=get_last($table_name, $column);
    
        foreach ($user_data as $key => $row) {
            $sanction_id=$row['sanction_id'];
            $sanction_name=$row['sanction_name'];
            $quantity=$row['quantity'];

            
        }
    
    echo "<br>".$sanction_id." ".$sanction_name." ".$quantity;
    
    date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $fullname=$_SESSION['firstlast'];
    $user_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Added in sanctions(".$sanction_id.")";
    
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