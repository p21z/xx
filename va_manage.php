<?php

include "header.php";
include "perfect_function.php"; 
unset($_SESSION['committer_id']);
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
                <h6 class="m-0 font-weight-bold text-primary">STUDENTS</h6>
                </div>
                <div class="card-body">
                <form method="post" action="va_search.php">
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
            <td>Program</td>
            <td>Year</td>
            <td>Section</td>
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
            <td>Name</td>
            <td>Program</td>
            <td>Year</td>
            <td>Section</td>
            <!-- <td>Email</td>
            <td>Contact</td>
            <td>Officer</td>
            <td>Gender</td> -->
            <td>Option</td>

        </tr>
        </tfoot>

        <tbody>

    <?php
        $table_name="students";
        $column = "status";
        $condition=0;
        $get_userData = get_where_custom($table_name, $column, $condition);

        foreach ($get_userData as $key => $row) {
            $id=$row['id'];
            $name=$row['firstname'] ." ". $row['middlename'] ." ". $row['lastname'];
            $program=$row['program'];
                // if ($program==0){
                //     $program="BLIS";
                // } elseif ($program==1){
                //     $program="BSIT";
                // } elseif ($program==2){
                //     $program="BSCE";
                // } elseif ($program==3){
                //     $program="BSCpE";
                // } else {
                //     $program="BSEnSE";
                // }
            $year_level=$row['year_level'];
                if ($year_level==1){
                    $year_level="1";
                } elseif ($year_level==2){
                    $year_level="2";
                } elseif ($year_level==3){
                    $year_level="3";
                } elseif ($year_level==4){
                    $year_level="4";
                } else {
                    $year_level="5";
                }
            $section=$row['section'];
            $email=$row['email'];
            $contact=$row['contact'];
            $officer=$row['officer'];
                // if ($officer==YES){
                //     $officer="YES";
                // } else {
                //     $officer="NO";
                // }
            $gender=$row['gender'];
                // if ($gender==1){
                //     $gender="FEMALE";
                // } else {
                //     $gender="MALE";
                // }

    ?>
    

    <tr>
        <td><?= $id ?></td>
        <td><?= $name ?></td>
        <td><?= $program ?></td>
        <td><?= $year_level ?></td>
        <td><?= $section ?></td>
        <!-- <td><?= $email ?></td>
        <td><?= $contact ?></td>
        <td><?= $officer ?></td>
        <td><?= $gender ?></td> -->

        <td>
                
        <a href="va_view.php?id=<?= $id?>" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="far fa-eye"></i>
        </span>
        <span class="text">
            View Violations and Attendance
        </span>
        </a>
        &nbsp;&nbsp;&nbsp;
        <a href="violation_add.php?id=<?= $id?>" class="btn btn-danger btn-icon-split" style="padding-right: -5%;">
        <span class="icon text-white-50">
            <i class="fas fa-print"></i>
        </span>
        <span class="text">
            Print Violations and Attendance
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