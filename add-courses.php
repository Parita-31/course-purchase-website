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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Course Add </h1>
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
                        <form action="add-courses-code.php" method="POST" enctype="multipart/form-data">
                            <h2>Add Courses</h2>
                            Course Name:<br>
                            <input  type="text" name="course_name" placeholder="Enter Course Name"><br>
                            Description:<br>
                            <textarea name="description" rows="3" cols="20"></textarea><br>
                            Category:<br>
                            <select name="category" size="1">
                                <option value="1">PHP</option>
                                <option value="2">Java</option>
                                <option value="3">DSA</option>
                                <option value="4">C language</option>
                                <option value="5">Python</option>
                            </select><br><br>
                            Price:<br>
                            <input  type="number" name="price" placeholder="Enter Price"><br>
                            Image:<br>
                            <input type="file" name="image"><br>
                            Total lecture:<br>
                            <input type="number" name="total_lecture"><br>
                            Trainer Name:<br>
                            <input  type="text" name="trainer_name" placeholder="Enter Trainer Name"><br><br>
                            <input type="submit" name="submit" value="Add">
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