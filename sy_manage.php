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
<a href="sy_add.php" class="btn btn-success btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-user-plus"></i>
</span>
<span class="text">
    ADD SCHOOL YEAR
</span>
</a>

<br><br>


<div class="card w-100">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">SCHOOL YEAR</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
    <thead>
    <tr>
        <td>&nbsp;</td>
        <td>Date Start</td>
        <td>Date End</td>
        <td>Status</td>
        <?php if($_SESSION['access']=="DEAN"){ ?>
            <td>Option</td>
            <?php } ?>

    </tr>
    </thead>

    <tfoot>
    <tr>
        <td>&nbsp;</td>
        <td>Date Start</td>
        <td>Date End</td>
        <td>Status</td>
        <?php if($_SESSION['access']=="DEAN"){ ?>
            <td>Option</td>
            <?php } ?>

    </tr>
    </tfoot>

    <tbody>

    <?php
        $table_name="schoolyear";

        $user_data=get($table_name);

        foreach ($user_data as $key => $row) {
            $sy_id=$row['sy_id'];
            $start=$row['start'];
            $end=$row['end'];
            $status=$row['status'];
            if ($status==0){
                $status="Active";
            } else {
                $status="Inactive";
            }
            

    ?>
    

    <tr>
        <td><?= $sy_id ?></td>
        <td><?= $start ?></td>
        <td><?= $end ?></td>
        <td><?= $status ?></td>
        
        <?php if($_SESSION['access']=="DEAN"){ ?>
            
            
        <td>
            <a href="sy_edit.php?id=<?= $sy_id?>" class="btn btn-warning btn-circle btn-md">
            <i class="far fa-edit"></i>
            </a>
        &nbsp;&nbsp;&nbsp;
        <a href="sy_delete.php?id=<?= $sy_id?>" class="btn btn-danger btn-circle btn-md">
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

