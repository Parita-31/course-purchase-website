<?php
include "connection.php";
session_start();

$username = $_POST['email'];
$password = $_POST['password'];

$qadmin = "select * from admin where email='$username' and password='$password'";
$quser = "select * from users where email='$username' and password='$password'";


$rsAdmin = mysqli_query($con,$qadmin);
$rsUser = mysqli_query($con,$quser);

if( $rowAdmin = mysqli_fetch_array($rsAdmin)){
            $_SESSION["admin"] = $rowAdmin;
            header("Location:admin-home.php");
}else if( $rowUser = mysqli_fetch_array($rsUser)){
        $_SESSION["user"] = $rowUser;
        header("Location:index.php");
}else{
    header("Location:login.php");
}
?>