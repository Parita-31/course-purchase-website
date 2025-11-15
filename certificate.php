<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <style>
        body{
            font-family: 'Arial',sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f3f4f6;
        }
        .certificate{
            width: 900px;
            height: 500px;
            padding: 20px;
            border: 10px solid #072366;
            border-radius: 15px;
            background-image: url('assets/img/certificate.png');
            background-size: cover;
            text-align: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.1); 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .certificate-header{
            width: 100%;
            display: grid;
            align-items: center;
            margin-bottom: 20px;
            grid-template-columns: auto;
        }
        .certificate-header .logo{
            margin-top: 20px;
            margin-right: 700px;
        }
        .certificate-header h1{
            text-align: center;
            font-size: 2em;
            margin: 0;
            margin-top: 20px;
        }
        .certificate-body p{
            font-size: 1.2em;
            margin: 10px 0;
        }
        .certificate-body h2{
            font-size: 1.8em;
            margin: 10px 0;
        }
        .certificate-body h3{
            font-size: 1.5em;
            margin: 10px 0;
        }
        
        #student-name{
            color: #ef1010;
        }
        #course-title{
            color: #5f2285;
        }
        .btn-download {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            transition: background-color 0.3s ease;
        }
        .btn-download:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php 
    include "connection.php";
    session_start();
    $username=$_SESSION['user'];
    $cid=$_GET['cid'];
    $q="select * from courses where cid='$cid'";
    $rs = mysqli_query($con,$q);
    while($row=mysqli_fetch_array($rs)){
    ?>
    <div class="certificate">
        <div class="certificate-header">
        <a href="#"><img src="assets/img/logo/logo1.jpg" alt="" width="150px" height="50px" class="logo"></a>
        <h1>Certificate of completion</h1>
        </div>
        <div class="certificate-body">
            <p>This is to certify that</p>
            <h2 id="student-name"><?php echo $username['name']?></h2>
            <p>has successfully completed the course</p>
            <h3 id="course-title"><?php echo $row['course_name']?></h3>
        </div>
        <button class="btn btn-download" onclick="window.print()">Download Certificate</button>
    </div>
    <?php  } ?>
</body>
</html>