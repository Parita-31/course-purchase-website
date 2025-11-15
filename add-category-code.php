<?php
include "connection.php";

$cat_name = $_POST['cat_name'];

$q="insert into categories(name) values('$cat_name')";

$rs = mysqli_query($con,$q);

if($rs){
    echo "success";
}
else{
    echo $con->error;
}
?>