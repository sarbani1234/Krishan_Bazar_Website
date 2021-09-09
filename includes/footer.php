 <?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
 <footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row footer-top">
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <?php 
 $query=mysqli_query($con,"select * from  tblpage where PageType='aboutus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
                    <div class="footer-title">
                        <h3><?php  echo $row['PageTitle'];?></h3>
                    </div>
                    <div class="footer-text">
                        <p><?php  echo $row['PageDescription'];?>.</p>
                        <ul class="footer-social text-left mt-lg-4 mt-3">

                        </ul>
                    </div>
                </div>
                <?php } ?>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <?php 
 $query=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
                    <div class="footer-title">
                        <h3>Get in touch</h3>
                    </div>
                    <div class="contact-info">
                        <h4>Location :</h4>
                        <p><?php  echo $row['PageDescription'];?></p>
                        <div class="phone">
                            <h4>Contact :</h4>
                            <p>Phone : +<?php  echo $row['MobileNumber'];?></p>
                            <p>Email :
                                <?php  echo $row['Email'];?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>Quick Links</h3>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="admin/login.php">Admin</a>
                        </li>
                        <li>
                            <a href="vendors/login.php">Vendors</a>
                        </li>
                         <li>
                            <a href="customer/login.php">Customers</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="links">
                        <li>
                            <a href="farmers/login.php">Farmers</a>
                        </li>
                        <li>
                            <a href="contact.php">Support</a>
                        </li>
                        
                    </ul>

                    <div class="clearfix"></div>
                </div>
                  <img src="images/pic3.jpg" alt=" " class="img-fluid" />
                   
                </div>
<div class="col-lg-3 footer-grid-wthree-w3ls">
                             </div>
           <div class="copyright mt-4">
                <p class="copy-right text-center ">&copy; KRISHAN BAZAR WEBSITE.
                </p>
            </div>

        </div>
    </footer>