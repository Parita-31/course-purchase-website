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
                                    <a href="admin-home.php"><img src="assets/img/logo/logo1.jpg" alt="" width="250px" height="50px"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li class="active" ><a href="admin-home.php">Home</a></li>
                                                <li><a href="view-category.php">Category</a></li>
                                               
                                                <li><a href="view-course.php">Courses</a></li>
                                            
                                                <li><a href="view-lectures.php">Lectures</a></li>
                                               
                                                <li><a href="view-users.php">Users</a></li>
                                                <li><a href="view-reviews.php">Reviews</a></li>
                                                <li><a href="view-orders.php">Orders</a></li>
                                                <li><a href="view-contact.php">Contact</a></li>
                                                <!-- Button -->
                                                 <?php 
                                                if(isset($_SESSION['admin'])){
                                                    ?>
                                                <li class="button-header margin-left "><a href="logout.php" class="btn">Logout</a></li>
                                

                                                    <?php }  ?>
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