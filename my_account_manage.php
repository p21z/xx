<?php
// session_start();
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
<a href="account_add.php" class="btn btn-success btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-user-plus"></i>
</span>
<span class="text">
    ADD ACCOUNTS
</span>
</a>

<br><br>


<div class="card w-75">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ACCOUNTS</h6>
            </div>
            <div class="card-body">
            <!-- <form method="post" action="account_search.php">
                    <div class="input-group mb-3 w-25" style="float: left;">
                        <input type="text" class="form-control" placeholder="" name="search" autocomplete="off" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                        </div>
                        </div>
                </form> -->
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
    <thead>
    <tr>
        <td>&nbsp;</td>
        <td>Full Name</td>
        <td>Username</td>
        <td>Contact - Email</td>
        <td>User Type</td>
        <td>Option</td>

    </tr>
    </thead>

    <tfoot>
    <tr>
    <td>&nbsp;</td>
        <td>Full Name</td>
        <td>Username</td>
        <td>Contact - Email</td>
        <td>User Type</td>
        <td>Option</td>

    </tr>
    </tfoot>

    <tbody>

    <?php
        $table_name = "accounts";
        $column = "username";
        $get_userData = get_where_custom($table_name, $column, $_SESSION['username']);

        foreach ($get_userData as $key => $row) {
            $acc_id=$row['acc_id'];
            $username=$row['username'];
            $name=$row['firstname'] ." ". $row['middlename'] ." ". $row['lastname'];
            $contact=$row['contact'];
            $email=$row['email'];
            $user_type=$row['user_type'];
            // if ($user_type==0){
            //     $user_type="GOVERNOR";
            // } elseif ($user_type==1){
            //     $user_type="FACULTY";
            // } elseif ($user_type==2){
            //     $user_type="DEAN";
            // } 

    ?>
    

    <tr>
        <td><?= $acc_id ?></td>
        <td><?= $username ?></td>
        <td><?= $name ?></td>
        <td><?= $contact."<br>". $email?></td>
        <td><?= $user_type ?></td>


        <td>
            <a href="my_account_edit.php?id=<?= $acc_id?>" class="btn btn-warning btn-circle btn-md">
            <i class="far fa-edit"></i>
            </a>
        &nbsp;&nbsp;&nbsp;
        
            </a>
            </a>
        </td>
    </tr>


        <?php   }   ?>
    </tbody>
</table>
</div>
</div>
</div>

