<?php
// session_start();
include "header_print.php";
include "perfect_function.php"; 
?>

<div align=center>

<br>
    <!-- <a href="stud_add.php" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-user-plus"></i>
    </span>
    <span class="text">
        STUDENT
    </span>
    </a> -->

    <div class="card w-100">
                <div class="card-header py-3 bg-secondary">
                <h5 class="m-0 font-weight-bold text-white">STUDENT INFORMATION</h5>
                </div>
                <div class="card-body bg-light">
                <div class="table-responsive">
                    <table class="" id="dataTable" width="100%" cellspacing="0" style="color: #000;">
        
        <tbody>
    <?php
        $table_name="students";
        if (isset($_SESSION['committer_id'])){
            $id=$_SESSION['committer_id'];
        } else {
            $id = $_GET['id'];
        }
        
        // $id=$_SESSION['committer_id'];
        $user_data=get_where($table_name, $id);

        foreach ($user_data as $key => $row) {
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
    <td>School No: <b><?= $id ?></b></td>
    </tr>

    <tr>
        <td>Name: <b><?= $name ?></b></td>
        <td>Program: <b><?= $program ?></b></td>
        <td>Year: <b><?= $year_level ?></b></td>
        <td>Section: <b><?= $section ?></b></td>
    </tr>
    <tr>
        <td>Email: <b><?= $email ?></b></td>
        <td>Contact: <b><?= $contact ?></b></td>
        <td>Officer: <b><?= ucfirst(strtolower($officer)) ?></b></td>
        <td>Gender: <b><?= ucfirst(strtolower($gender)) ?></b></td>

        <!-- <td>
            <a href="stud_edit.php?id=<?= $id?>" class="btn btn-warning btn-circle btn-md">
            <i class="far fa-edit"></i>
            </a>
        &nbsp;&nbsp;&nbsp;
        <a href="stud_delete.php?id=<?= $id?>" class="btn btn-danger btn-circle btn-md">
            <i class="far fa-trash-alt"></i>
            </a>
            </a>
        </td> -->
    </tr>


        <?php   }   ?>
    </tbody>
</table>




</div>
</div>
</div>

<br>
<!-- ____________________________________________________________________________________________________________________ -->
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

    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==4){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    VIOLATION SUCCESSFULLY COMPLIED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    // ECHO $_SESSION['committer_id'];
    ?>
<!-- ____________________________________________________________________________________________________________________ -->

<div class="card w-100" style="margin-top: 20px; float: left;">
                <div class="card-header py-3 bg-secondary">
                <h6 class="m-0 font-weight-bold text-white">VIOLATIONS</h6>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
        <thead>
        <tr>
            <td>&nbsp;</td>
            <td>Violation</td>
            <td>Date Committed</td>
            <td>Status</td>
            <!-- <td>Option</td> -->

        </tr>
        </thead>

        <tfoot>
        <tr>
            <td>&nbsp;</td>
            <td>Violation</td>
            <td>Date Committed</td>
            <td>Status</td>
            <!-- <td>Option</td> -->

        </tr>
        </tfoot>

        <tbody>

    <?php
        $table_name="violations";
        $column="committer_id";
        if (isset($_SESSION['committer_id'])){
            $value=$_SESSION['committer_id'];
        } else {
            $value = $_GET['id'];
            $_SESSION['committer_id'] = $_GET['id'];
        }
        // echo $_SESSION['committer_id'];

        $user_data=get_where_custom($table_name, $column, $value);

        foreach ($user_data as $key => $row) {
            $vio_id=$row['vio_id'];
            // $name=$row['firstname'] ." ". $row['middlename'] ." ". $row['lastname'];
            $committer_id=$row['committer_id'];
            $description=$row['description'];
            $date_committed=$row['date_committed'];
            $compliance=$row['compliance'];
                if ($compliance==0){
                    $compliance="Not Complied";
                } else {
                    $compliance="Complied";
                }

    ?>
    

    <tr>
        <td><?= $vio_id ?></td>
        <!-- <td><?= $committer_id ?></td> -->
        <td><?= $description ?></td>
        <td><?= $date_committed ?></td>
        <td><?= $compliance ?></td>

        <!-- <td>
        <?php if ($compliance="Not Complied"){
            ?>
            <a href="violation_comply.php?id=<?= $vio_id?>" class="btn btn-info btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">
                Comply
            </span>
            </a>
        <?php }
            ?>
            
        &nbsp;&nbsp;&nbsp;
            <a href="violation_edit.php?id=<?= $vio_id?>&id2=<?= $id?>" class="btn btn-warning btn-circle btn-md">
            <i class="far fa-edit"></i>
            </a>
        &nbsp;&nbsp;&nbsp;
        <a href="violation_delete.php?id=<?= $id?>&id2=<?= $vio_id?>" class="btn btn-danger btn-circle btn-md">
            <i class="far fa-trash-alt"></i>
            </a>
            </a>
        </td> -->
    </tr>

                
        <?php    }   ?>
    </tbody>
</table>

</div>
</div>
</div>

<!-- <div class="" style="margin-top: 23px;">

<a href="violation_add.php?id=<?= $id?>" class="btn btn-danger btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">
            Add Violation
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        </a>

<a href="violation_view.php?id=<?= $id?>" class="btn btn-success btn-icon-split" style="margin-top: 10px;">
        <span class="icon text-white-50">
            <i class="fas fa-print"></i>
        </span>
        <span class="text">
            Print violation
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        </a>

<a href="violation_view.php?id=<?= $id?>" class="btn btn-dark btn-icon-split" style="margin-top: 10px;">
        <span class="icon text-white-50">
            <i class="fas fa-print"></i>
        </span>
        <span class="text">
            View violation and attendance
        </span>
        </a>

<a href="violation_active_manage.php" class="btn btn-secondary btn-icon-split" style="margin-top: 10px;">
        <span class="icon text-dark-50">
            <i class="fas fa-user-times"></i>
        </span>
        <span class="text">
            Return to student list
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        </a>
</div> -->
</div>





