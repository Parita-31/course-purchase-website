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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Lecture Add </h1>
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
                        <form action="add-lectures-code.php" method="POST">
                            <h2>Add Lectures</h2>
                            Course Name:<br>
                            <select name="course" size="1">
                                <option value="1">PHP</option>
                                <option value="2">Java</option>
                                <option value="3">PHP and MYSQL</option>
                                <option value="4">PHP frontend and backend</option>
                                <option value="5">PHP Beginner</option>
                                <option value="6">PHP crash course</option>
                                <option value="7">Java Beginner</option>
                                <option value="8">Advanced Java</option>
                                <option value="9">Java Full Stack</option> 
                                <option value="10">OOP in Java</option>
                                <option value="11">DSA with c++</option>
                                <option value="12">DSA with Java</option>
                                <option value="13">DSA with Python</option>
                                <option value="14">DSA with C</option>
                                <option value="15">DSA +leetcode solution</option> 
                                <option value="16">C programing for beginners</option>
                                <option value="17">Advanced C programming</option>
                                <option value="18">Advanced C programming: Pointer</option>
                                <option value="19">Introduction to C</option>
                                <option value="20">C with standard libraries</option>
                                <option value="21">Python Beginners</option>
                                <option value="22">Python for Cybersecurity</option>
                                <option value="23">Data Analysis with Python</option>
                                <option value="24">Advanced Python</option>
                                <option value="25">AI and ML using Python</option>
                            </select>
                            <br><br>
                            Video Url:<br>
                            <input  type="text" class="form-control" name="video_url">
                            <br>
                            Title:
                            <input  type="text" class="form-control" name="title" placeholder="Enter Title Name"><br><br>
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