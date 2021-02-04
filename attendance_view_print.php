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
                <h5 class="m-0 font-weight-bold text-white">EVENT INFORMATION</h5>
                </div>
                <div class="card-body bg-light">
                <div class="table-responsive">
                    <table class="" id="dataTable" width="100%" cellspacing="0" style="color: #000;">
        
        <tbody>
    <?php
        $table_name="events";
        $column="event_id";
        $event_id = $_GET['id'];
        
        // $id=$_SESSION['committer_id'];
        $get_userData = get_where_custom($table_name, $column, $event_id);

        
            foreach ($get_userData as $key => $row) {
                $id = $row['event_id'];
                $event_name = $row['event_name'];
                $date = $row['e_date'];
                $end = $row['e_end'];
                $venue = $row['venue'];
            

    ?>
    <tr>
    <td>Event ID: <b><?= $id ?></b></td>
    </tr>

    <tr>
        <td>Event Title: <b><?= $event_name ?></b></td>
        <td>Date Started: <b><?= $date ?></b></td>
        
    </tr>
    <tr>
        <td>Venue: <b><?= $venue ?></b></td>
        <td>Date Ended: <b><?= $end ?></b></td>

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
                <h6 class="m-0 font-weight-bold text-white">ATTENDANCE</h6>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
        <thead>
        <tr>
            <td>&nbsp;</td>
            <td>Student ID</td>
            <td>Student Name</td>
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
        $table_name="attendance";
        $column="event_id";
        $value = $_GET['id'];


        
        // echo $_SESSION['committer_id'];

        $user_data=get_where_custom($table_name, $column, $value);
        

        foreach ($user_data as $key => $row) {
            $att_id=$row['att_id'];
            // $name=$row['firstname'] ." ". $row['middlename'] ." ". $row['lastname'];
            $s_id=$row['s_id'];
            $event_id=$row['event_id'];
            $event_name=$row['event_name'];
            $presence=$row['presence'];
            if ($presence==0){
                $presence="Present";
            } elseif ($presence==1){
                $presence="Late";
            } elseif ($presence==2){
                $presence="Excused";
            } elseif ($presence==3){
                $presence="Partial";
            } elseif ($presence==4){
                $presence="Absent";
            }
            
            $table_name2="students";
            $column2="id";
            $value2 =$s_id;

            $user_data2=get_where_custom($table_name2, $column2, $value2);

            foreach ($user_data2 as $key => $row) {
                $name=$row['firstname'] ." ". $row['middlename'] ." ". $row['lastname'];
            }

            

    ?>
    

    <tr>
        <td><?= $att_id ?></td>
        <!-- <td><?= $committer_id ?></td> -->
        <td><?= $s_id ?></td>
        <!-- <td><?= $event_id ?></td>
        <td><?= $event_name ?></td> -->
        <td><?= $name ?></td>
        <td><?= $presence ?></td>

        <!-- <td>
            <a href="attendance_edit.php?id=<?= $att_id?>&id2=<?= $event_id?>" class="btn btn-warning btn-circle btn-md">
            <i class="far fa-edit"></i>
            </a>
        &nbsp;&nbsp;&nbsp;
        <a href="attendance_delete.php?id=<?= $event_id?>&id2=<?= $att_id?>" class="btn btn-danger btn-circle btn-md">
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

<a href="attendance_add.php?id=<?= $event_id?>" class="btn btn-danger btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">
            Add Attendee
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
            Print attendance
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

<a href="attendance.php" class="btn btn-secondary btn-icon-split" style="margin-top: 10px;">
        <span class="icon text-dark-50">
            <i class="fas fa-user-times"></i>
        </span>
        <span class="text">
            Return to event list
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;
        </span>
        </a>
</div> -->
</div>





