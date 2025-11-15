<?php
include "connection.php";
session_start();
    $message=$_POST['review'];
    $username=$_SESSION['user'];
    $c_date=time();
    $date=date("Y-m-d",$c_date);
    $user_id=$username['uid'];
    $q="insert into reviews(uid,r_date,message) values('$user_id','$date','$message')";
    $rs = mysqli_query($con,$q);

    if($rs){
        header("Location:reviews.php");
    }
    else{
        echo $con->error;
    }
?>