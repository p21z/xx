<?php
include "perfect_function.php";
include "header.php";
//get s ID from URL
$id = $_GET['id'];
$form_location = "my_account_edit_proc.php?id=".$id;

$table_name = "accounts";
$column = "acc_id";
$get_userData = get_where_custom($table_name, $column, $id);

//fetch result and pass it  to an array
foreach ($get_userData as $key => $row) {
	        $acc_id=$row['acc_id'];
            $username=$row['username'];
            $firstname=$row['firstname'];
            $middlename=$row['middlename'];
            $lastname=$row['lastname'];
            $contact=$row['contact'];
            $email=$row['email'];
            $user_type=$row['user_type'];
    
}
?>
<div align=center>
<div class="card mb-4 w-100"  style="width:50%;">
<div class="card-header">
    UPDATE DETAILS
</div>

<form method="post" action="<?=$form_location;?>">

  <div class="" style="margin-left:10%;">

    <input type="text" name="username" class="form-control form-control-user" autocomplete=off value="<?= $username;?>" style="width:40%; margin-left:3%; margin-top:5%; float:left;" readonly>

  </div>

  <div class="input-group" style="width:80%; margin-left:5%; margin-top: 9%;">
    <div class="input-group-prepend">
      <span class="input-group-text">First, middle and last name</span>
    </div>
      <input type="text" name="firstname" class="form-control form-control-user" autocomplete=off value="<?= $firstname;?>" class="form-control">
      <input type="text" name="middlename" class="form-control form-control-user" autocomplete=off value="<?= $middlename;?>" class="form-control">
      <input type="text" name="lastname" class="form-control form-control-user" autocomplete=off value="<?= $lastname;?>" class="form-control">
  </div>
  <br>

  <div class="" style="margin-left:9%;">

  <input type="number" name="contact" class="form-control form-control-user" value="<?= $contact;?>" autocomplete=off required style="width:40%; margin-left:4%; margin-top:0%; float:left;">
  <select type="text" name="gender" class="form-control form-control-user" autocomplete=off required style="width:40%; margin-left:3%; float:left;">
        <option value="">Gender:</option>
        <option value="0">MALE</option>
        <option value="1">FEMALE</option>
      </select>

      <input type="email" name="email" class="form-control form-control-user" autocomplete=off value="<?= $email;?>" style="width:40%; margin-left:4%; margin-top:2%; float:left;">


    <select type="text" name="user_type" class="form-control form-control-user" autocomplete=off required style="width:40%; margin-left:3%; margin-right: 3%; margin-top:2%; float:left;">
        <option value="">Type:</option>
        <option value="GOVERNOR">GOVERNOR</option>
        <option value="FACULTY">FACULTY</option>
        <option value="DEAN">DEAN</option>
      </select>

  </div>
    <br>
    <br>
<br>

	<button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top: 5%;">
	<span class="icon text-white-50">
	<i class="fas fa-user-edit"></i>
		</span>
		<span class="text">
			UPDATE ACCOUNT
		</span>
	</button>
&nbsp;&nbsp;
	<a href="my_account_manage.php" class="btn btn-danger btn-icon-split" style=" margin-top:5%">
    <span class="icon text-white-50">
	<i class="fas fa-ban"></i>
</span>
<span class="text">
    CANCEL
</span>
</a>

	<br><br><br>
</form>

