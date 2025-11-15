<?php
//Orders.php
include "connection.php";
session_start();
    $username=$_SESSION['user'];
    $c_date=time();
    $date=date("Y-m-d",$c_date);
    $cid = $_GET['cid'];
    $user_id=$username['uid'];
    $q="insert into orders(o_date,cid,uid) values('$date','$cid','$user_id')";
    $rs = mysqli_query($con,$q);

    if($rs){
        header("Location:orders.php");
    }
    else{
        echo $con->error;
    }
?>