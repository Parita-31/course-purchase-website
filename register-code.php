<?php
include "connection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$q="insert into users(name,email,password) values('$name','$email','$password')";

$rs = mysqli_query($con,$q);

if($rs){
    header('Location:login.php');
}
else{
    echo "fail";
}
?>