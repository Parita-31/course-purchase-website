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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Category View </h1>
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
                    <a href="add-category.php" class="btn">Add-Category</a>
                        <div class="section-tittle d-flex justify-content-center mb-55">
                       

                        <table class="table table-bordered table-hover">
                            <thead>
                                    <tr> 
                                        <th> SR NO. </th>
                                        <th> Category Name </th>
                                        <th> Action </th>
                                    </tr>
                            </thead>
                            <tbody>
                                    <?php 
                                    if(isset($_GET['cat_id'])){
                                        //delete record
                                        $qdelete="delete from categories where cat_id=".$_GET['cat_id'];
                                        $rdelete=mysqli_query($con,$qdelete);
                                    }
                                    $q="select * from categories";
                                    $rs=mysqli_query($con,$q);
                                    while($row=mysqli_fetch_array($rs)){
                                    ?>
                                    <tr>
                                        <td> <?php echo $row['cat_id'] ?></td>    
                                        <td> <?php echo $row['name'] ?></td>
                                        <td> <a href="view-category.php?cat_id=<?php echo $row['cat_id']; ?>" class="btn" 
                                        onclick="return confirm('do you want to delete?')">Delete</a> </td>
                                    </tr>        
                                    <?php } ?>
                            </tbody>
                        </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
    include "footer.php"; 
?>