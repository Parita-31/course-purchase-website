<?php
include "connection.php";

$course = $_POST['course'];
$url = $_POST['video_url'];
$title = $_POST['title'];

$q="insert into lectures(cid,url,title) values('$course','$url','$title')";

$rs = mysqli_query($con,$q);

if($rs){
    echo "success";
}
else{
    echo $con->error;
}
?>