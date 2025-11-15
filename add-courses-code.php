<?php
include "connection.php";

$course_name = $_POST['course_name'];
$description = $_POST['description'];
$price = $_POST['price'];

$dest= "course-img/" . $_FILES['image']['name'];
move_uploaded_file( $_FILES['image']['tmp_name'],$dest);

$total_lecture = $_POST['total_lecture'];
$trainer_name = $_POST['trainer_name'];
$category=$_POST['category'];
$q="insert into courses(course_name,price,description,img,total_lect,trainer_name,cat_id) values('$course_name','$price','$description','$dest','$total_lecture','$trainer_name','$category')";

$rs = mysqli_query($con,$q);

if($rs){
    echo "success";
}
else{
    echo $con->error;
}