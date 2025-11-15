<?php
    include "header.php";
    include "admin-menu.php";
?>
    <main>
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">
                                        Course View </h1>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12">
                    <a href="add-courses.php" class="btn">Add-Course</a>
                        <div class="section-tittle d-flex justify-content-center mb-55">
                        
                        <table class="table table-bordered table-hover">
                            <thead>
                                    <tr> 
                                        <th> SR NO. </th>
                                        <th> Course name </th>
                                        <th> img </th>
                                        <th> trainer_name </th>
                                        <th> Price </th>
                                        <th> Action </th>
                                    </tr>
                            </thead>
                            <tbody>
                                    <?php 
                                    if(isset($_GET['cid'])){
                                        //delete record
                                        $qdelete="delete from courses where cid=".$_GET['cid'];
                                        $rdelete=mysqli_query($con,$qdelete);
                                    }
                                    $q="select * from courses";
                                    $rs=mysqli_query($con,$q);
                                    while($row=mysqli_fetch_array($rs)){
                                    ?>
                                    <tr>
                                            <td> <?php echo $row['cid'] ?></td>
                                            <td> <?php echo $row['course_name'] ?></td>
                                            <td><img src="<?php echo $row['img'] ?>" style="width:100px; height:50px" /> </td>
                                            <td> <?php echo $row['trainer_name'] ?></td>
                                            <td> <?php echo $row['price'] ?></td>
                                            <td> <a href="view-course.php?cid=<?php echo $row['cid']; ?>" class="btn" 
                                            onclick=" return confirm('do you want to delete?')">Delete</a> </td>
                                    </tr>        
                                    <?php } ?>
                            </tbody>
                        </table>

                        </div>
                    </div>
                </div>
            </div>2
        </div>
    </main>
<?php
    include "footer.php"; 
?>