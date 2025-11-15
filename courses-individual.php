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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Courses</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item"><a href="courses.php">Courses</a></li> 
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
                            <h2>Course</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">   
                <?php 
                $cid=$_GET['cid'];
                $q="select * from courses where cid='$cid'";
                $rs = mysqli_query($con,$q);
                while($row=mysqli_fetch_array($rs)){
                ?>
                <div class="col-lg-4">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                    <a href="#"><img src="<?php print $row['img']?>" alt="" width=300px height=200px></a>
                                    <br><br>
                                    <h3>Course Name: <?php print $row['course_name']?></h3>
                                    <p>Description: <?php print $row['description']?></p>
                                    <span>Price: <?php print $row['price']?>/-</span>
                                    <p>Trainer name: <?php print $row['trainer_name']?></p>
                                    <p>Life time access to course</p>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <?php 
                        if(isset($_SESSION['user'])){
                    ?>
                    <a href="orders-code.php?cid=<?php echo $row['cid']; ?>" class="border-btn border-btn2" 
                    onclick="return confirm('do you want to purchase?')">Purchase</a>
                    <?php }
                    else{
                    ?>
                    <a href="login.php" class="border-btn border-btn2">To purchase please login first</a>
                    <?php } 
                        }
                    ?>

                     <!-- end lectures  -->

                </div>
            </div>
        </div>
        
    </main>
<?php
    include "footer.php"; 
?>