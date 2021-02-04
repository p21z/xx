<?php
// session_start();
include "header.php";
include "perfect_function.php"; 

unset($_SESSION['committer_id']);

if (isset($_SESSION['back_a2'])){
    unset($_SESSION['back_a2']);
}
    $_SESSION['back_a1']=1;
?>

<div align=center>

    <?php
    // if (isset($_SESSION['alert_msg'])){
    //     if ($_SESSION['alert_msg']==1){
    //         echo "
    //             <div class='card mb-4 py-3 border-bottom-success'>
    //                 <div class='card-body'>
    //                 RECORD SUCCESSFULLY ADDED
    //                 </div>
    //             </div>";
    //             unset($_SESSION['alert_msg']);
    //     }
    // }
    
    // if (isset($_SESSION['alert_msg'])){
    //     if ($_SESSION['alert_msg']==2){
    //         echo "
    //             <div class='card mb-4 py-3 border-bottom-success'>
    //                 <div class='card-body'>
    //                 RECORD SUCCESSFULLY EDITED
    //                 </div>
    //             </div>";
    //             unset($_SESSION['alert_msg']);
    //     }
    // }

    // if (isset($_SESSION['alert_msg'])){
    //     if ($_SESSION['alert_msg']==3){
    //         echo "
    //             <div class='card mb-4 py-3 border-bottom-success'>
    //                 <div class='card-body'>
    //                 RECORD SUCCESSFULLY DELETED
    //                 </div>
    //             </div>";
    //             unset($_SESSION['alert_msg']);
    //     }
    // }
    ?>

<br>
    <!-- <a href="stud_add.php" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-user-plus"></i>
    </span>
    <span class="text">
        ADD STUDENT
    </span>
    </a>

<br><br> -->


    <div class="card w-100">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">EVENTS</h6>
                </div>
                <div class="card-body">
                <form method="post" action="attendance_search.php">
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
            <td>Event Title</td>
            <td>Date</td>
            <!-- <td>Section</td> -->
            <!-- <td>Email</td>
            <td>Contact</td>
            <td>Officer</td>
            <td>Gender</td> -->
            <td>Option</td>

        </tr>
        </thead>

        <tfoot>
        <tr>
        <td>&nbsp;</td>
            <td>Event Title</td>
            <td>Date</td>
            <!-- <td>Section</td> -->
            <!-- <td>Email</td>
            <td>Contact</td>
            <td>Officer</td>
            <td>Gender</td> -->
            <td>Option</td>

        </tr>
        </tfoot>

        <tbody>

    <?php

$table_name="events";
$column = "status";
$condition=0;
$get_userData = get_where_custom($table_name, $column, $condition);

foreach ($get_userData as $key => $row) {
            $event_id=$row['event_id'];
            $event_name=$row['event_name'];
            $date=$row['e_date'];
            $end=$row['e_end'];

            if ($date==$end){
                $dateshow=$row['e_date'];
            } else{
            $dateshow=$row['e_date'] ." to ". $row['e_end'];
            }
    ?>
    

    <tr>
        <td><?= $event_id ?></td>
        <td><?= $event_name ?></td>
        <td><?= $dateshow ?></td>

        <td>
                
        <a href="attendance_view.php?id=<?= $event_id?>" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="far fa-eye"></i>
        </span>
        <span class="text">
            View Attendance
        </span>
        </a>
        &nbsp;&nbsp;&nbsp;
        <a href="attendance_add.php?id=<?= $event_id?>" class="btn btn-danger btn-icon-split" style="padding-right: -5%;">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">
            Add Attendee
        </span>
        </a>
            <!-- <a href="stud_edit.php?id=<?= $id?>" class="btn btn-warning btn-circle btn-md">
            <i class="far fa-edit"></i>
            </a>
        &nbsp;&nbsp;&nbsp;
        <a href="stud_delete.php?id=<?= $id?>" class="btn btn-danger btn-circle btn-md">
            <i class="far fa-trash-alt"></i>
            </a>
            </a> -->
        </td>
    </tr>


        <?php   }   ?>
    </tbody>
</table>

<!-- <?= $id.$_SESSION['committer_id'];?> -->
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