<?php
session_start();

include "perfect_function.php";

$table_name="accounts";
$username=$_POST['username'];
$password=$_POST['password'];
// echo $username."<br>";

$user_data = get_where_custom($table_name, "username", $username);
	foreach ($user_data as $key => $row) {
        $password1 = $row['password1'];
        $user_type = $row['user_type'];

        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
    }

if ($password1==$password){
    
    // echo $password." == ".$password1."<br>";
    $_SESSION['access'] = $user_type;
    $_SESSION['username']=$username;
    // $_SESSION['firstlast']=$firstname." ".$lastname;
    $_SESSION['firstlast']=$firstname;
    // echo $_SESSION['firstlast'];
    header("Location: va_manage.php");
} else {
    $_SESSION['login']=1;
    header("Location: login.php");
}




?>