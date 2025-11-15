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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Category Add </h1>
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
                            <form  action="add-category-code.php" method="POST">
                                <h2>Add Category</h2>
                                <div class="form-input">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="cat_name" placeholder="Enter Category Name">
                                 </div>
                                <div class="form-input pt-30">
                                <input type="submit" name="submit" value="Add">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
    include "footer.php"; 
?>