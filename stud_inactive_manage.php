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

    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==5){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    STUDENT SUCCESSFULLY ACTIVATED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    ?>

<br>
    <!-- <a href="stud_add.php" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-user-plus"></i>
    </span>
    <span class="text">
        ADD STUDENT
    </span>
    </a> -->

<br><br>


    <div class="card w-100">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">INACTIVE STUDENTS</h6>
                </div>
                <div class="card-body">
                <form method="post" action="stud_inactive_search.php">
                    <div class="input-group mb-3 w-25" style="float: left;">
                        <input type="text" class="form-control" placeholder="" name="search" autocomplete="off" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                        </div>
                        </div>
                </form>
        <!-- <?php if($_SESSION['access']=="DEAN"){ ?>
                <a href="stud_deact_all.php" class="btn btn-danger btn-icon-split" style="float: right; margin-left: 1%;">
                    <span class="icon text-red-50">
                    <i class="fas fa-user-slash"></i>
                </span>
                <span class="text">
                    DEACTIVATE ALL
                </span>
                </a>
        <?php   } ?> -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
        <thead>
        <tr>
            <td>&nbsp;</td>
            <td>Name</td>
            <td>Program</td>
            <td>Year</td>
            <td>Section</td>
            <td>Email</td>
            <td>Contact</td>
            <td>Officer</td>
            <td>Gender</td>
            <?php if($_SESSION['access']=="DEAN"){ ?>
            <td>Option</td>
            <?php } ?>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <td>&nbsp;</td>
            <td>Name</td>
            <td>Program</td>
            <td>Year</td>
            <td>Section</td>
            <td>Email</td>
            <td>Contact</td>
            <td>Officer</td>
            <td>Gender</td>
            <?php if($_SESSION['access']=="DEAN"){ ?>
            <td>Option</td>
            <?php } ?>

        </tr>
        </tfoot>

        <tbody>

    <?php

    
    
    
    //fetch result and pass it  to an array
    

        $table_name="students";
        $column = "status";
        $condition=1;
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
        <td><?= $email ?></td>
        <td><?= $contact ?></td>
        <td><?= $officer ?></td>
        <td><?= $gender ?></td>

        <?php if($_SESSION['access']=="DEAN"){ ?>
            
        <td>
        <a href="stud_activate.php?id=<?= $id?>" class="btn btn-secondary btn-icon-split" style="margin-left: 1%;">
                    <span class="icon text-red-50">
                    <i class="fas fa-users"></i>
                </span>
                <span class="text">
                    ACTIVATE
                </span>
        </a>
        &nbsp;&nbsp;
            <a href="stud_edit.php?id=<?= $id?>" class="btn btn-warning btn-circle btn-md">
            <i class="far fa-edit"></i>
            </a>
        &nbsp;&nbsp;&nbsp;
        <a href="stud_delete.php?id=<?= $id?>" class="btn btn-danger btn-circle btn-md">
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

