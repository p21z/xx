<?php include "perfect_function.php";
include "header.php"
?>
<div align=center>
<div class="card mb-4"  style="width:50%;">
<div class="card-header">
    ADD NEW EVENT
</div>

<form method="post" action="events_add_proc.php">

<input type="text" name="event_name" class="form-control form-control-user" autocomplete=off placeholder="Event Title" required style="width:80%; margin-left:5%; margin-top:5%;"> <br>

<div class="input-group" style="width:80%; margin-left:5%;">
    <div class="input-group-prepend">
      <span class="input-group-text">Date Start</span>
    </div>
	<input type="date" name="date" class="form-control form-control-user" autocomplete=off placeholder="Date" required> <br>
      
  </div>

  <div class="input-group" style="width:80%; margin-left:5%; margin-top:4%;">
    <div class="input-group-prepend">
      <span class="input-group-text">Date End &nbsp;</span>
    </div>
	<input type="date" name="end" class="form-control form-control-user" autocomplete=off placeholder="Date" required> <br>
      
  </div>

<input type="text" name="venue" class="form-control form-control-user" autocomplete=off placeholder="Venue" required style="width:80%; margin-left:5%; margin-top:4%;"> <br>

<!-- <input type="number" name="value" class="form-control form-control-user" autocomplete=off placeholder="Value" required style="width:80%; margin-left:5%;"> <br> -->

<!-- <select name="status" class="form-control" required style="width:80%; margin-left:5%;">
<option value="">Select Student Status:</option>
<option value="1">Regular</option>
<option value="0">Irregular</option>
</select>
<br> -->

<button type="submit" class="btn btn-success btn-icon-split" style="margin-left:5%;">
	<span class="icon text-white-50">
	<i class="fas fa-user-plus"></i>
		</span>
		<span class="text">
			ADD EVENT
		</span>
	</button>
&nbsp;&nbsp;
	<a href="events_manage.php" class="btn btn-danger btn-icon-split">
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
