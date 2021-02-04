<?php
include "perfect_function.php";
include "header.php";
//get s ID from URL
$id = $_GET['id'];
$form_location = "sanc_edit_proc.php?id=".$id;

$table_name = "sanctions";
$column = "sanction_id";
$get_userData = get_where_custom($table_name, $column, $id);
//fetch result and pass it  to an array
foreach ($get_userData as $key => $row) {
	$id = $row['sanction_id'];
	$sanction_name = $row['sanction_name'];
    $quantity = $row['quantity'];
    
}
?>
<div align=center>
<div class="card mb-4"  style="width:50%;">
<div class="card-header">
    UPDATE DETAILS
</div>

<form method="post" action="<?= $form_location ?>">

<input type="text" name="sanction_name" value="<?= $sanction_name ?>" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;"> 

<input type="number" name="quantity" value="<?= $quantity ?>" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;"> 
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
			UPDATE SANCTION
		</span>
	</button>
&nbsp;&nbsp;
	<a href="sanc_manage.php" class="btn btn-danger btn-icon-split">
    <span class="icon text-white-50">
	<i class="fas fa-ban"></i>
</span>
<span class="text">
    CANCEL
</span>
</a>

	<br><br><br>
</form>

