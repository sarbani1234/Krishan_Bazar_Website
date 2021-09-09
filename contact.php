<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>KRISHAN BAZAR WEBSITE|| Contact Us</title>
	
	
</head>


<body>
	<!-- banner-inner -->
	<div id="demo-1" class="page-content">
		<div class="dotts">
			<div class="header-top">
			 <?php include_once('includes/header.php');?>
			</div>
			<!--/banner-info-w3layouts-->
			<div class="banner-info-w3layouts text-center">
			</div>
			<!--//banner-info-w3layouts-->
		</div>
	</div>
	<ol class="breadcrumb justify-content-left">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Contact Us</li>
	</ol>
	<!-- banner-text -->
	<!-- contact -->
	<section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
		<div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
		<!---728x90--->
			<h3 class="tittle text-center mb-lg-5 mb-3">
				<span>Get Intouch</span>Contact Us</h3>
				<!---728x90--->
				<?php 
 $query=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
				<div class="container">
						<div class="address row mb-5">
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="far fa-map"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Address</h6>
										<p> <?php  echo $row['PageDescription'];?>
		
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="far fa-envelope"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Email</h6>
										<p>Email :<?php  echo $row['Email'];?></p>
									</div>
		
								</div>
							</div>
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="fas fa-mobile-alt"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Phone</h6>
										<p>+<?php  echo $row['MobileNumber'];?></p>
		
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
		
		</div>
	</section>
	<!-- //contact -->
	<!---728x90--->
	<!--footer -->
	 <?php include_once('includes/footer.php');?>
	<!-- //footer -->

	
</body>

</html>