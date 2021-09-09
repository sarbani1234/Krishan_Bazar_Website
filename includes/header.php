<!DOCTYPE html>
<html>
<head>

</head>
<body topmargin = 0 leftmargin = 0>
    

                    <div class="top-head ml-lg-auto text-center">
                        <div class="row">

                            </div>
<?php

 if($_SESSION['agrouid']==0){?>

                            <div class="col-md-3 sign-btn">
                                <a href="farmers/login.php" data-target="#exampleModalCenter">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
                            </div>
                            <div class="col-md-3 sign-btn">
                                <a href="farmers/farmers_register.php" data-target="#exampleModalCenter2">
                                    <i class="far fa-user"></i> Register</a>
                            </div>
                           <?php } else {?>

                            <div class="col-md-5 sign-btn">
                                <a href="farmers/farmers_register.php" data-target="#exampleModalCenter2">
     <i class="far fa-user"></i> <?php echo $_SESSION['fname'];?></a> | <a href="user/logout.php">Logout </a>
                            </div>
                           <?php } ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fas fa-bars"></i>
                            </span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home
                                       
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About Us</a>
                                </li>
<?php

 if($_SESSION['agrouid']==0){?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Farmers
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="farmers/login.php">Sign In</a>
                                        <a class="dropdown-item" href="farmers/farmers_register.php" title="">Register</a>
                                       
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin/login.php">Admin</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Vendors
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="vendors/login.php"> Sign In</a>
                                        <a class="dropdown-item" href="vendors/vendor_register.php">Register</a>
                                       
                                    </div>
                                </li>

                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Customers
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="customer/login.php"> Sign In</a>
                                        <a class="dropdown-item" href="customer/customer_register.php">Register</a>
                                       
                                    </div>
                                </li>

                            <?php } else {?>
  <li class="nav-item active">
                                    <a class="nav-link" href="farmers/dashboard.php">Farmers Dashboard</a>
                                </li>
                            <?php } ?>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
            </body>
            </html>