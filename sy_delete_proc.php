<?php
    session_start();
    include "perfect_function.php";

    $table_name = "schoolyear";

    //get user ID from URL
    $id = $_GET['id'];
    $column = "sy_id";
    delete_from($id, $table_name, $column);
    $_SESSION['alert_msg']=3;

    header("Location: sy_manage.php");

?>