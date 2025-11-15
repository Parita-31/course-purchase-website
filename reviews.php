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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Reviews</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item"><a href="reviews.php">Reviews</a></li> 
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
        <style>
            .item {
                margin-bottom: 20px;
                padding: 15px;
                border: 3px solid #ddd;
                border-radius: 10px;
                background-color: #fff;
                transition: box-shadow 0.3s ease;
            }
            .item:hover {
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }
        
        </style>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Reviews</h2>
                        </div>
                    </div>
                </div>
                <?php 
                if(isset($_GET['rid'])){
                    //delete record
                    $qdelete="delete from reviews where rid=".$_GET['rid'];
                    $rdelete=mysqli_query($con,$qdelete);
                }
                $username=$_SESSION['user'];
                $user_id=$username['uid'];
                $q1="select * from reviews";
                $rs1 = mysqli_query($con,$q1);
                while($row1=mysqli_fetch_array($rs1)){
                    $uid=$row1['uid'];
                    $q2="select * from users where uid='$uid'";
                    $rs2=mysqli_query($con,$q2);
                    while($row2=mysqli_fetch_array($rs2)){
                        $uid=$row2['uid'];
                ?>
                <div class="item">
                <p>⋙</p>
                <h2>Review by:- <?php echo $row2['name']?></h2><br>
                <h2>Date:- <?php echo $row1['r_date']?></h2><br>
                <p><?php echo $row1['message']?></p>
                
                <?php
                    if($user_id==$uid){
                ?>
                        Do you want to delete your review?<a href="reviews.php?rid=<?php echo $row1['rid']; ?>" class="btn" 
                        onclick="return confirm('do you want to delete?')">Delete</a>
                    
                    <?php } ?>
                    </div>
                    <?php
                            } 
                         }
                    ?>
                    <div class="section-tittle mb-55">
                    <h1>You can send your review by writing into these box:-</h1>
                    <form action="review-code.php" method="post">
                        <textarea name="review" rows="3" cols="20" placeholder="Enter your review.."></textarea><br>
                        <input type="submit" value="Send" class="btn btn-primary">
                    </form>
                    </div>
                </div>
            </div>
        </div>
        .
    </main>
<?php
    include "footer.php"; 
?>