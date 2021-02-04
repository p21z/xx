<?php
include "perfect_function.php";
include "header.php";
//get s ID from URL
$id = $_GET['id'];
$id2 = $_GET['id2'];
// echo $_GET['id'].$_GET['id2'];
$form_location = "violation_edit_proc.php?id=".$id."&id2=".$id2;

$table_name = "violations";
$column = "vio_id"; 
$get_userData = get_where_custom($table_name, $column, $id);

//fetch result and pass it  to an array
foreach ($get_userData as $key => $row) {
	$vio_id = $row['vio_id'];
	$committer_id = $row['committer_id'];
    $description = $row['description'];
    $date_committed = $row['date_committed'];
	$compliance = $row['compliance'];
}
?>
<div align=center>
<div class="card mb-4"  style="width:50%;">
<div class="card-header">
    VIOLATION DETAILS
</div>

<form method="post" action="<?= $form_location ?>">

	

	<!-- <input type="text" name="committer_id" value="<?= $committer_id ?>" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;" readonly>  -->

	<input type="text" name="description" value="<?= $description ?>" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;"> 

    <input type="date" name="date_committed" value="<?= $date_committed ?>" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;"> 

	<select type="text" name="compliance" class="form-control form-control-user" autocomplete=off required style="width:80%; margin-left:5%; margin-top:5%;"> 
	<option value="1">Compliance</option>
	  <option value="1">Complied</option>
      <option value="0">Not Complied</option>
      
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
			UPDATE VIOLATION
		</span>
	</button>
&nbsp;&nbsp;
	<a href="violation_view.php?id=<?=$id2?>" class="btn btn-danger btn-icon-split">
    <span class="icon text-white-50">
	<i class="fas fa-ban"></i>
</span>
<span class="text">
    CANCEL
</span>
</a>

	<br><br><br>
</form>

