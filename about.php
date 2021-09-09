<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>KRISHAN BAZAR WEBSITE|| About Us</title>
	
	
</head>


<body>

	<div id="demo-1" class="page-content">
		<div class="dotts">
			<div class="header-top">
			 <?php include_once('includes/header.php');?>
			</div>
		
			<div class="banner-info-w3layouts text-center">
			</div>
		
		</div>
	</div>
	<ol class="breadcrumb justify-content-left">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">About Us</li>
	</ol>
	
	<section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
		<div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
	
			<h3 class="tittle text-center mb-lg-5 mb-3">
				<span>Get More info</span>About Us</h3>
			
				<?php 
 $query=mysqli_query($con,"select * from  tblpage where PageType='aboutus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
				<div class="container">
						<div class="address row mb-5">
							<div class="col-lg-12 address-grid">
								<div class="row address-info">
								
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2"><?php  echo $row['PageTitle'];?></h6>
										<p> <?php  echo $row['PageDescription'];?>
		
										</p>
									</div>
								</div>
							</div>
							
							
						</div>
					</div>
					<?php } ?>
		
		</div>
	</section>

	 <?php include_once('includes/footer.php');?>

	
	
</body>

</html>