<header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/logo/logo1.jpg" alt="" width="250px" height="50px"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li class="active" ><a href="index.php">Home</a></li>
                                                <li><a href="courses.php">Courses</a></li>
                                                <li><a href="contact.php">Contact</a></li>
                                                <!-- Button -->
                                                 <?php 
                                                if(isset($_SESSION['user'])){
                                                    ?>
                                            <li><a href="reviews.php">Reviews</a></li>
                                            <li><a href="purchased-courses.php">Purchased-Courses</a></li>
                                            <li class="button-header margin-left "><a href="logout.php" class="btn">Logout</a></li>
                                             

                                                    <?php } else { ?>
                                                        <li class="button-header margin-left "><a href="register.php" class="btn">Register</a></li>
                                                <li class="button-header"><a href="login.php" class="btn btn3">Log in</a></li>
                                                        <?php } ?>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>