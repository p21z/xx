<?php

include "header.php";
include "perfect_function.php"; 

?>
<div align=center>
<?php
    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==1){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY ADDED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==2){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY EDITED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==3){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY DELETED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }
?>
<br>
<!-- <a href="events_add.php" class="btn btn-success btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-user-plus"></i>
</span>
<span class="text">
    ADD EVENT
</span>
</a> -->

<br><br>


<div class="card w-100">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">INACTIVE EVENTS</h6>
            </div>
            <div class="card-body">
            <form method="post" action="event_inactive_search.php">
                    <div class="input-group mb-3 w-25" style="float: left;">
                        <input type="text" class="form-control" placeholder="" name="search" autocomplete="off" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                        </div>
                        </div>
                </form>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
    <thead>
    <tr>
        <td>&nbsp;</td>
        <td>Name</td>
        <td>Date Start</td>
        <td>Date End</td>
        <td>Venue</td>
        <?php if($_SESSION['access']=="DEAN"){ ?>
            <td>Option</td>
            <?php } ?>

    </tr>
    </thead>

    <tfoot>
    <tr>
        <td>&nbsp;</td>
        <td>Name</td>
        <td>Date Start</td>
        <td>Date End</td>
        <td>Venue</td>
        <?php if($_SESSION['access']=="DEAN"){ ?>
            <td>Option</td>
            <?php } ?>

    </tr>
    </tfoot>

    <tbody>

    <?php
        $table_name="events";
        $column = "status";
        $condition=1;
        $get_userData = get_where_custom($table_name, $column, $condition);

        foreach ($get_userData as $key => $row) {
            $event_id=$row['event_id'];
            $event_name=$row['event_name'];
            $date=$row['e_date'];
            $end=$row['e_end'];
            $venue=$row['venue'];
            

    ?>
    

    <tr>
        <td><?= $event_id ?></td>
        <td><?= $event_name ?></td>
        <td><?= $date ?></td>
        <td><?= $end ?></td>
        <td><?= $venue ?></td>
        
        <?php if($_SESSION['access']=="DEAN"){ ?>
            
            
        <td>
            <a href="events_edit.php?id=<?= $event_id?>" class="btn btn-warning btn-circle btn-md">
            <i class="far fa-edit"></i>
            </a>
        &nbsp;&nbsp;&nbsp;
        <a href="events_delete.php?id=<?= $event_id?>" class="btn btn-danger btn-circle btn-md">
            <i class="far fa-trash-alt"></i>
            </a>
            </a>
        </td>
        <?php } ?>
    </tr>


        <?php   }   ?>
    </tbody>
</table>
</div>
</div>
</div>

<?php

$table_name="events";

$user_data=get($table_name);

foreach ($user_data as $key => $row) {
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
if( strtotime("+1 day", strtotime($end)) < time()){

	$table_name = 'events';
	$condition = 'event_id';

	//get user ID from URL
	$id=$event_id;
	$status=1;
	
	$user_editedValues = array(
        "status" => $status
	);

	update_from($user_editedValues, $id, $table_name, $condition);
    include "sandbox2.php";


	// header("Location: stud_manage.php");



}
} ?>
