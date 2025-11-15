<?php
    include "header.php";
    include "menu.php";
?>
    <main>
        <style>
            #certificateButton{
                display:none;
            }
        </style>
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Lectures</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item"><a href="lectures.php">Lectures</a></li> 
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
                            <h2>Lectures</h2>
                        </div>
                    </div>
                </div>
                <div class="row">   
                <?php 
                $cid=$_GET['cid'];
                $q="select * from lectures where cid='$cid'";
                $rs = mysqli_query($con,$q);
                while($row=mysqli_fetch_array($rs)){
                ?>
                
                    <div class="col-lg-12">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                
                                <div class="properties__caption">
                                 
                                    <h3><?php print $row['title']?></h3>
                                    <video id="trainingVideo" width="320" height="240" controls>
                                        <source src="<?php echo $row['url'] ?>" type="video/mp4">
                                    </video>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <form id="certificateForm" method="get">
                    <a id='certificateButton' href="certificate.php?cid=<?php echo $row['cid']; ?>" class="border-btn border-btn2" >Generate Certificate</a>
                </form>
                    <script>
                        document.getElementById('trainingVideo').addEventListener('ended',function(){
                            document.getElementById('certificateButton').style.display='block';
                        });
                    </script>
                    <?php } ?>

                     <!-- end lectures  -->
                    
                </div>
            </div>
        </div>
        
    </main>
<?php
    include "footer.php"; 
?>