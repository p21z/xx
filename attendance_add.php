<?php
// session_start();
include "perfect_function.php";
include "header.php";
//get s ID from URL
$event_id = $_GET['id'];
$form_location = "attendance_add_proc.php?id=".$event_id;

$table_name = "events";
$column= "event_id";
$value= $event_id;
$get_userData = get_where_custom($table_name, $column, $value);
//fetch result and pass it  to an array
foreach ($get_userData as $key => $row) {
    $event_id = $row['event_id'];
    $event_name=$row['event_name'];
    
}
?>
<div align=center>
<div class="card mb-4"  style="width:50%;">
<div class="card-header">
    UPDATE DETAILS
</div>

<form method="post" action="<?= $form_location ?>">
    
	<input type="number" name="event_id" value="<?= $event_id ?>" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;" readonly> 

    <input type="text" name="event_name" value="<?= $event_name ?>" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;" readonly> 

	<input type="number" name="s_id" placeholder="Enter ID number" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;"> 

	<!-- <input type="text" name="stud_name" placeholder="Enter Student Name" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;">  -->

	<select type="date" name="presence" placeholder="Date committed" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;"> 
        <option value="">Presence:</option>
        <option value="0">Present</option>
        <option value="1">Late</option>
        <option value="2">Excused</option>
        <option value="3">Partial</option>
        <option value="4">Absent</option>
    </select>
    

	<!-- <select name="status" class="form-control" required style="width:80%; margin-left:5%; margin-top:5%;">
<option value="">Select Student Status:</option>
<option value="1">Regular</option>
<option value="0">Irregular</option>
</select> -->
<br>

	<button type="submit" class="btn btn-success btn-icon-split" style="margin-left:5%;">
	<span class="icon text-white-50">
	<i class="fas fa-user-edit"></i>
		</span>
		<span class="text">
			ADD ATTENDEE
		</span>
	</button>
&nbsp;&nbsp;
	<a href="attendance.php?id=<?php $event_id ?>" class="btn btn-danger btn-icon-split">
    <span class="icon text-white-50">
	<i class="fas fa-ban"></i>
</span>
<span class="text">
    CANCEL
</span>
</a>

	<br><br><br>
</form>

