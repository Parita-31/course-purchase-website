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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Contact View </h1>
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
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle d-flex justify-content-center mb-55">
                        
                        <table class="table table-bordered table-hover">
                            <thead>
                                    <tr> 
                                        <th> SR NO. </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Subject </th>
                                        <th> Message </th>
                                        <th> Action </th>
                                    </tr>
                            </thead>
                            <tbody>
                                    <?php 
                                    if(isset($_GET['contact_id'])){
                                        //delete record
                                        $qdelete="delete from contact where contact_id=".$_GET['contact_id'];
                                        $rdelete=mysqli_query($con,$qdelete);
                                    }
                                    $q="select * from contact";
                                    $rs=mysqli_query($con,$q);
                                    while($row=mysqli_fetch_array($rs)){
                                    ?>
                                    <tr>
                                            <td> <?php echo $row['contact_id'] ?></td>
                                            <td> <?php echo $row['name'] ?></td>
                                            <td> <?php echo $row['email'] ?></td>
                                            <td> <?php echo $row['subject'] ?></td>
                                            <td> <?php echo $row['message'] ?></td>
                                            <td> <a href="view-contact.php?contact_id=<?php echo $row['contact_id']; ?>" class="btn" 
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