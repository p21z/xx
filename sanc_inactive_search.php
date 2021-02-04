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
<a href="sanc_add.php" class="btn btn-success btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-user-plus"></i>
</span>
<span class="text">
    ADD SANCTION
</span>
</a>

<br><br>


<div class="card w-75">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">INACTIVE SANCTIONS</h6>
            </div>
            <div class="card-body">
            <form method="post" action="sanc_inactive_search.php">
                    <div class="input-group mb-3 w-25" style="float: left;">
                    <input type="text" class="form-control" placeholder="" name="search" autocomplete="off" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                        </div>
                        </div>
                </form>
                <a href="sanc_inactive_manage.php" class="btn btn-outline-secondary btn-icon-split" style="float: left; margin-left: 1%;">
                    <span class="icon text-black-50">
                    <i class="fas fa-users"></i>
                </span>
                <span class="text">
                    View all
                </span>
                </a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
    <thead>
    <tr>
        <td>&nbsp;</td>
        <td>Item Name</td>
        <td>Quantity</td>
        <?php if($_SESSION['access']=="DEAN"){ ?>
            <td>Option</td>
            <?php } ?>

    </tr>
    </thead>

    <tfoot>
    <tr>
        <td>&nbsp;</td>
        <td>Item Name</td>
        <td>Quantity</td>
        <?php if($_SESSION['access']=="DEAN"){ ?>
            <td>Option</td>
            <?php } ?>

    </tr>
    </tfoot>

    <tbody>

    <?php
        $table_name="sanctions";
        $search=$_POST['search'];
        echo "<div style='float:left;'><i>Results of <b>"
                ."'".$_POST['search']."'"
                ."</b>.</i><br><br></div>";
        $user_data=search_inactive_sanc($table_name, $search);

        foreach ($user_data as $key => $row) {
            $sanction_id=$row['sanction_id'];
            $sanction_name=$row['sanction_name'];
            $quantity=$row['quantity'];

    ?>
    

    <tr>
        <td><?= $sanction_id ?></td>
        <td><?= $sanction_name ?></td>
        <td><?= $quantity ?></td>


        <?php if($_SESSION['access']=="DEAN"){ ?>
            
            <td>
            <a href="sanc_deact.php?id=<?= $sanction_id?>" class="btn btn-secondary btn-icon-split" style="margin-left: 1%;">
                        <span class="icon text-red-50">
                        <i class="fas fa-truck-loading"></i>
                    </span>
                    <span class="text">
                        DEACTIVATE
                    </span>
            &nbsp;&nbsp;
            </a>
                <a href="sanc_edit.php?id=<?= $sanction_id?>" class="btn btn-warning btn-circle btn-md">
                <i class="far fa-edit"></i>
                </a>
            &nbsp;&nbsp;&nbsp;
            <a href="sanc_delete.php?id=<?= $sanction_id?>" class="btn btn-danger btn-circle btn-md">
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

