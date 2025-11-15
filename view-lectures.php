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
                                        Lectures View </h1>
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
                    <a href="add-lectures.php" class="btn">Add-Lectures</a>
                        <div class="section-tittle d-flex justify-content-center mb-55">
                        
                        <table class="table table-bordered table-hover">
                            <thead>
                                    <tr> 
                                        <th> SR NO. </th>
                                        <th> Title </th>
                                        <th> Video </th>
                                        <th> Action </th>
                                    </tr>
                            </thead>
                            <tbody>
                                    <?php 
                                    if(isset($_GET['lid'])){
                                        //delete record
                                        $qdelete="delete from lectures where lid=".$_GET['lid'];
                                        $rdelete=mysqli_query($con,$qdelete);
                                    }
                                    $q="select * from lectures";
                                    $rs=mysqli_query($con,$q);
                                    while($row=mysqli_fetch_array($rs)){
                                    ?>
                                    <tr>
                                            <td> <?php echo $row['lid'] ?></td>
                                            <td> <?php echo $row['title'] ?></td>
                                            <td><video width="320" height="240" src="<?php echo $row['url'] ?>" controls>
                                            </video> </td>
                                            <td> <a href="view-lectures.php?lid=<?php echo $row['lid']; ?>" class="btn" 
                                            onclick="return confirm('do you want to delete?')">Delete</a> </td>
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