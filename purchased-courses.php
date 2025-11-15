<?php
    include "header.php";
    include "menu.php";
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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Purchased courses</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item"><a href="purchased-courses.php">Purchased Courses</a></li> 
                                        </ol>
                                    </nav>
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Purchased Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                <!-- start course  -->
                
                <?php 

                $username=$_SESSION['user'];
                $user_id=$username['uid'];
                $q1="select * from orders where uid='$user_id'";
                $rs1 = mysqli_query($con,$q1);
                while($row1=mysqli_fetch_array($rs1)){
                    $cid=$row1['cid'];
                    $q2="select * from courses where cid='$cid'";
                    $rs2= mysqli_query($con,$q2);
                    while($row2=mysqli_fetch_array($rs2)){
                ?>
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="<?php print $row2['img']?>" alt="" width=300px height=200px></a>
                                </div>
                                <div class="properties__caption">
                                 
                                    <h3><a href="#"><?php print $row2['course_name']?></a></h3>
                                    <p><?php print $row2['description']?></p>
                                    <p>Life time access to course</p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="price">
                                            <span>Purchased</span>
                                        </div>
                                    </div>
                                    <a href="lectures.php?cid=<?php echo $row2['cid']; ?>" class="border-btn border-btn2" >Start Learning</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php 
                            }
                        } ?>

                     <!-- end course  -->

                </div>
                
            </div>
        </div>
        <!-- Courses area End -->
          
    </main>
<?php
    include "footer.php"; 
?>