<?php
$id = $_GET['id'];
include "header.php";
?>

<div align=center>
        <!-- Begin Page Content -->
        <div class="container-fluid">

<div class="card shadow w-50">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">COMPLY SANCTION</h6>
                </div>
                
                <div class="card-body">
                  Student will now comply sanction.
           <br>
           <br>
           
           <form method="post" action="violation_comply_proc.php?id=<?= $id?>">
           <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:5%;">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">
                Continue
            </span>
            </a>
            </button>
        &nbsp;&nbsp;&nbsp;
        <a href="violation_view.php" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-times"></i>
            </span>
            <span class="text">
                Cancel&nbsp;&nbsp;&nbsp;
            </span>
            </a>
          
            </div>

              </div>

