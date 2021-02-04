<?php
include "perfect_function.php";
include "header.php";
//get s ID from URL
$id = $_GET['id'];
$form_location = "sy_edit_proc.php?id=".$id;

$table_name = "schoolyear";
$column = "sy_id";
$get_userData = get_where_custom($table_name, $column, $id);
//fetch result and pass it  to an array
foreach ($get_userData as $key => $row) {
	
    
}
?>
<div align=center>
<div class="card mb-4"  style="width:50%;">
<div class="card-header">
    UPDATE DETAILS
</div>

<form method="post" action="<?= $form_location ?>">

<div class="input-group" style="width:80%; margin-left:5%; margin-top:4%;">
    <div class="input-group-prepend">
      <span class="input-group-text">Date Start</span>
    </div>
	<input type="date" name="start" class="form-control form-control-user" autocomplete=off placeholder="Date" required> <br>
      
  </div>

<div class="input-group" style="width:80%; margin-left:5%; margin-top:4%;">
    <div class="input-group-prepend">
      <span class="input-group-text">Date End &nbsp;</span>
    </div>
	<input type="date" name="end" class="form-control form-control-user" autocomplete=off placeholder="Date" required> <br>
      
  </div>
  <br>
  <br>

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
			UPDATE SCHOOL YEAR
		</span>
	</button>
&nbsp;&nbsp;
	<a href="sy_manage.php" class="btn btn-danger btn-icon-split">
    <span class="icon text-white-50">
	<i class="fas fa-ban"></i>
</span>
<span class="text">
    CANCEL
</span>
</a>

	<br><br><br>
</form>

