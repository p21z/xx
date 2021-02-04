<?php
include "perfect_function.php";
include "header.php";
//get s ID from URL
    $id = $_GET['id'];
    $form_location = "stud_edit_proc.php?id=".$id;

    $table_name = "students";
    $get_userData = get_where($table_name, $id);
    //fetch result and pass it  to an array
    foreach ($get_userData as $key => $row) {
        $id = $row['id'];
        $program = $row['program'];
        $section = $row['section'];
        $firstname = $row['firstname'];
        $middlename = $row['middlename'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $contact = $row['contact'];
        $officer = $row['officer'];
        $gender = $row['gender'];
    }

        // echo $id. "<br>".
        // $program. "<br>".
        // $section. "<br>".
        // $firstname. "<br>".
        // $middlename. "<br>".
        // $lastname. "<br>".
        // $email. "<br>".
        // $contact . "<br>".
        // $officer . "<br>".
        // $gender;
?>

<div align=center>
<div class="card mb-4 w-90">
<div class="card-header">
    UPDATE DETAILS
</div>

<form method="post" action="stud_edit_proc.php">

  <div class="" style="margin-left:8%;">

    <select type="text" name="program" class="form-control form-control-user" autocomplete=off required style="width:27%; margin-left:5%; margin-top:5%; float:left;">
      <option value="">Program:</option>
      <option value="BLIS">BLIS</option>
      <option value="BSIT">BSIT</option>
      <option value="BSCE">BSCE</option>
      <option value="BSCpE">BSCpE</option>
      <option value="BSEnSE">BSEnSE</option>
    </select>

    <select type="text" name="year_level" class="form-control form-control-user" autocomplete=off required style="width:27%; margin-left:3%; margin-top:5%; float:left;">
      <option value="">Year:</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>

    <input type="text" name="section" class="form-control form-control-user" autocomplete=off value="<?= $section ?>" style="width:27%; margin-left:3%; margin-top:5%; float:left;">

  </div>

  <div class="input-group" style="width:80%; margin-left:5%; margin-top: 10%;">
    <div class="input-group-prepend">
      <span class="input-group-text">First, middle and last name</span>
    </div>
      <input type="text" name="firstname" class="form-control form-control-user" autocomplete=off value="<?= $firstname ?>" class="form-control">
      <input type="text" name="middlename" class="form-control form-control-user" autocomplete=off value="<?= $middlename ?>" class="form-control">
      <input type="text" name="lastname" class="form-control form-control-user" autocomplete=off value="<?= $lastname ?>" class="form-control">
  </div>
  <br>

  <input type="number" name="id" class="form-control form-control-user" autocomplete=off value="<?= $id ?>" required style="width:80%; margin-left:5%;" readonly>

  <div class="" style="margin-left:8%;">
    <input type="email" name="email" class="form-control form-control-user" autocomplete=off value="<?= $email ?>" required style="width:41%; margin-left:5%; margin-top:2%; float:left;">
    <input type="number" name="contact" class="form-control form-control-user" autocomplete=off value="<?= $contact ?>" required style="width:42%; margin-left:4%; margin-top:2%; float:left;">
  </div>

  <div class="" style="margin-left:8%;">
    <select type="text" name="officer" class="form-control form-control-user" autocomplete=off required style="width:41%; margin-left:5%; margin-top:2%; float:left;">
        <option value="">Officer:</option>
        <option value="NO">NO</option>
        <option value="YES">YES</option>
      </select>
      
    <select type="text" name="gender" class="form-control form-control-user" autocomplete=off required style="width:42%; margin-left:4%; margin-top:2%; float:left;">
        <option value="">Gender:</option>
        <option value="MALE">MALE</option>
        <option value="FEMALE">FEMALE</option>
      </select>
  </div>
    <br>
    <br>
    <!-- BUTTONS -->
    <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:5%">
      <span class="icon text-white-50">
      <i class="fas fa-user-plus"></i>
        </span>
        <span class="text">
          UPDATE STUDENT
        </span>
      </button>
    &nbsp;&nbsp;
      <a href="stud_manage.php" class="btn btn-danger btn-icon-split" style=" margin-top:5%">
        <span class="icon text-white-50">
      <i class="fas fa-ban"></i>
    </span>
    <span class="text">
        CANCEL
    </span>
    </a>
<br><br><br>

<form>
</div>
