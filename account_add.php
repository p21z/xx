<?php include "perfect_function.php";
include "header.php"
?>
<div align=center>
<div class="card mb-4 w-90">
<div class="card-header">
    ADD NEW USER
</div>



<form method="post" action="account_add_proc.php">

  <div class="" style="margin-left:10%;">

    <input type="text" name="username" class="form-control form-control-user" autocomplete=off placeholder="Username" style="width:40%; margin-left:3%; margin-top:5%; float:left;">
    <input type="password" name="password" class="form-control form-control-user" autocomplete=off placeholder="Password" style="width:40%; margin-left:3%; margin-top:5%; float:left;">
    

  </div>

  <div class="input-group" style="width:80%; margin-left:5%; margin-top: 9%;">
    <div class="input-group-prepend">
      <span class="input-group-text">First, middle and last name</span>
    </div>
      <input type="text" name="firstname" class="form-control form-control-user" autocomplete=off placeholder="First Name" class="form-control">
      <input type="text" name="middlename" class="form-control form-control-user" autocomplete=off placeholder="Middle Name" class="form-control">
      <input type="text" name="lastname" class="form-control form-control-user" autocomplete=off placeholder="Last Name" class="form-control">
  </div>
  <br>

  <div class="" style="margin-left:9%;">

  <input type="number" name="contact" class="form-control form-control-user" placeholder="Contact" autocomplete=off required style="width:40%; margin-left:4%; margin-top:0%; float:left;">
  <select type="text" name="gender" class="form-control form-control-user" autocomplete=off required style="width:40%; margin-left:3%; float:left;">
        <option value="">Gender:</option>
        <option value="0">MALE</option>
        <option value="1">FEMALE</option>
      </select>

      <input type="email" name="email" class="form-control form-control-user" autocomplete=off placeholder="Email Address" style="width:40%; margin-left:4%; margin-top:2%; float:left;">


    <select type="text" name="user_type" class="form-control form-control-user" autocomplete=off required style="width:40%; margin-left:3%; margin-right: 3%; margin-top:2%; float:left;">
        <option value="">Type:</option>
        <option value="GOVERNOR">GOVERNOR</option>
        <option value="FACULTY">FACULTY</option>
        <option value="DEAN">DEAN</option>
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
          ADD USER
        </span>
      </button>
    &nbsp;&nbsp;
      <a href="account_manage.php" class="btn btn-danger btn-icon-split" style=" margin-top:5%">
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