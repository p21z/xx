<?php
    session_start();

    include "perfect_function.php";

    $table_name = "sanctions";
    $column = "sanction_id";

    $user_data=get_last($table_name, $column);
    
        foreach ($user_data as $key => $row) {
            $sanction_id=$row['sanction_id'];
            $sanction_name=$row['sanction_name'];
            $quantity=$row['quantity'];

            echo "<br>".$sanction_id." ".$sanction_name." ".$quantity;
        }
