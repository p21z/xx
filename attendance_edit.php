<?php
include "perfect_function.php";
include "header.php";
//get s ID from URL
$id = $_GET['id'];
$id2 = $_GET['id2'];
// echo $_GET['id'].$_GET['id2'];
$form_location = "attendance_edit_proc.php?id=".$id."&id2=".$id2;

$table_name = "attendance";
$column = "att_id"; 
$get_userData = get_where_custom($table_name, $column, $id);

//fetch result and pass it  to an array
foreach ($get_userData as $key => $row) {
	$att_id = $row['att_id'];
	$s_id = $row['s_id'];
    $event_id = $row['event_id'];
    $event_name = $row['event_name'];
	$presence = $row['presence'];
}
?>
<div align=center>
<div class="card mb-4"  style="width:50%;">
<div class="card-header">
    ATTENDEE DETAILS
</div>

<form method="post" action="<?= $form_location ?>">

	

	<!-- <input type="text" name="committer_id" value="<?= $committer_id ?>" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;" readonly>  -->

	<input type="number" name="event_id" value="<?= $event_id ?>" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;" readonly> 

    <input type="text" name="event_name" value="<?= $event_name ?>" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;" readonly> 

	<input type="number" name="s_id" value="<?= $s_id ?>" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;"> 

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
			UPDATE ATTENDEE
		</span>
	</button>
&nbsp;&nbsp;
	<a href="attendance_view.php?id=<?=$id2?>" class="btn btn-danger btn-icon-split">
    <span class="icon text-white-50">
	<i class="fas fa-ban"></i>
</span>
<span class="text">
    CANCEL
</span>
</a>

	<br><br><br>
</form>

