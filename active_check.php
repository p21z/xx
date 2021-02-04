<?php
include "perfect_function.php";

$value = 0;
$column = "status";
$column2 = "sy_id";
$table_name = "schoolyear";
$get_userData = get_where_custom($table_name, $column, $value);

//fetch result and pass it  to an array
foreach ($get_userData as $key => $row) {
	$sy_id = $row['sy_id'];
	$start = $row['start'];
    $end = $row['end'];
    $status = $row['status'];

    if ((strtotime($end)<time())||(strtotime($start)>time())){
        $status=1;
    } else {
        $status=0;
    }

    echo $status." ".time()." ".strtotime($start)." ".strtotime($end);

    echo "<br>".$sy_id." ".$start." ".$end." ".$status."<br>";

    $user_editedValues = array(
		"status" => $status
	);

    // update_from($user_editedValues, $sy_id, $table_name, $column2);
    
    
    echo "<br>". $status."<br>";
    // $_SESSION['alert_msg']=2;

}




?>