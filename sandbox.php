<?php
// session_start();
// include "perfect_function.php"; 
// date_default_timezone_set('Asia/Singapore');
// echo date('Y-m-d')."<br>";
// // echo date('h:i:sa');
// $_SESSION['X']="red";
// $_SESSION['Y']="40";

// if (isset($_SESSION['X'])){
//     echo "x";
// }
// print_r($_SESSION);
?>

<!-- <div style="color: <?=$_SESSION['X']?>; font-size: <?=$_SESSION['Y']?>; border: 1px solid #defade">
LOREM IPSUM DOLOR
</div> -->
<div style="visibility: hidden;">
<table border=1>
<?php

$table_name="events";

$user_data=get($table_name);

foreach ($user_data as $key => $row) { //1
    $event_id=$row['event_id'];
    $event_name=$row['event_name'];
    $date=$row['e_date'];
    $end=$row['e_end'];
    $venue=$row['venue'];
    $status=$row['status'];
    

?>
<!-- <tr>
<td><?= $end ?></td>
<td><?= strtotime($end)  ?></td>
<td><?= strtotime("+1 day", strtotime($end))  ?></td>
<td><?= time() ?></td>
</tr> -->
<?php 
if( strtotime("+1 day", strtotime($end)) < time()){ //2

	$table_name = 'events';
	$condition = 'event_id';

	//get user ID from URL
	$id=$event_id;
	$status=1;
	
	$user_editedValues = array(
        "status" => $status
	);

	update_from($user_editedValues, $id, $table_name, $condition);
    $_SESSION['alert_msg']=5;

 
	// GETTING STUDENTS ID FOR S_ID VALUE
    $table_name="students";
        $column = "status";
        $condition=0;
        $get_userData = get_where_custom($table_name, $column, $condition);

        foreach ($get_userData as $key => $row) {//3
            $s_id=$row['id'];

            $table_name="attendance";
            $s_id=$s_id;
            $event_id= $event_id;
            $event_name=$event_name;
            // $stud_name=$_POST['stud_name'];
            $presence=4;
            

            $user_data=array(
                "s_id" => $s_id ,
                "event_id" => $event_id ,
                "event_name" => $event_name ,
                // "stud_name" => $stud_name ,
                "presence" => $presence

            );

            echo insert($user_data, $table_name);
            // $_SESSION['alert_msg']=1;

}//3
}//2
}//1 ?>
</table>
</div>