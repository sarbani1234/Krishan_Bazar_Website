<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="header2.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="sidenav.css">
  	<link rel="stylesheet" type="text/css" href="navbar.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="styletruckanimate.css">
</head>
<body topmargin = 0 leftmargin = 0>
	<div class="header">
		<img class="logo" src="attachment_81994235-removebg-preview.png">
		<span style="font-family: cursive;font-size: 50px;font-weight: bold;color: #093465;position: absolute;left: 20px;top: 40px;">fleet wave</span>
	</div>
	<!--side nav starts-->
  <div class="navbar">
        
        <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">about</a>
  <a href="#">content</a>
  <a href="#">content</a>
  <a href="#">content</a>
  <a href="#">content</a>
</div>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
        
<span class="a" style="position: absolute;top: 120px;color: #36ACDF;font-size:30px;cursor:pointer"
onclick="openNav()">&#9776; open</span> </div>
<!--sidenav ends here-->
<?php

 if($_SESSION['agrouid']==0){?>
<div class="navbartop">
  <a href="about.php">About us</a>
  <a href="#news">News</a>
  <a href="contact.php">Contact Us</a>
  <a href="#">Rentals</a>
  <a href="welcome.php">Transport Services</a>
  <a href="admin/login.php">Admin</a>
  <a href=finalpart/fleetowner/ownerlogin.php style="position: absolute;right: 20px;color: red;font-weight: bolder;">fleet owner login</a>
  <a href=finalpart/fleetowner/newcard.php style="position: absolute;right: 200px;color: red;font-weight: bolder;">Fleetwave special</a>
<?php } ?>
</div> 
</div> 
	</div>
		
<div style="position: absolute;top: 207.5px;width: 100%;">
	<div class="truckanimate">
	<div class="loop-wrapper">
  <div class="mountain"></div>
  <div class="hill"></div>
  <div class="tree"></div>
  <div class="tree"></div>
  <div class="tree"></div>
  <div class="rock"></div>
  <div class="truck"></div>
  <div class="wheels"></div>
</div>
</div>
</div>
<!-- partial -->
	<div class="scania" style="position: absolute;top: 707px;">
		<video autoplay muted loop width="50%" height="50%">
			<source src="Scania_Group_–_Subscribe_to_our_channel!(1080p).mp4" type="video/mp4">
		</video>
		<img src="84329876_666301200779857_7226657652005868828_n.jpg" style="position: absolute;height: 170%;width: 50%;">
	<a href="scania.html"><img src="Scania-logo.jpg" style="position: absolute;left: 0px;top: 427px;width: 50%;height: 70%;"></a>
	<h4 style="position: absolute;top: 700px;left: 70%;font-family: cursive;font-style: cursive;font-weight: bolder;color: white;font-size: 60px;">No Room For</h4>
    </div>
    <div>
    	<span style="position: absolute;top: 850px;left: 77%;font-family: fantasy;font-style: fantasy;color: white;font-weight: bolder;font-size: 60px;">Downtime</span>
    </div>
    <div>
    	<a href="scania.html" style="position: absolute;top: 950px;left: 80%;border: 2px solid white;color: white;padding: 20px 40px 20px 40px;font-weight: bolder;text-decoration: none;">Visit</a>
    </div>
</div>

	</div>

    <div class="mantrucksandbuses" style="position: absolute;top: 1400px;">
    	<video autoplay muted loop width="100%" height="80%">
    		<source src="MAN_Bodybuilder_Management(1080p).mp4" type="video/mp4">
    	</video>
    	<h4 style="position: absolute;top: 400px;left: 60%;font-family: cursive;font-style: cursive;color: white;font-size: 70px;">A UNIQUE LOOK</h4>
    	<a href="#" style="position: absolute;top: 700px;left: 75%;padding: 10px 40px 10px 40px;color: black;border: 2px solid white;background-color: white;text-decoration: none;font-family: sans-serif;">Visit Now</a>
    </div>
    <div class="renaulttrucks" style="position: absolute;top: 2078px;">
    	<a href="#"><video autoplay muted loop style="width: 50%;">
    		<source src="_International_Truck_Of_The_Year_2015(1080p).mp4" type="video/mp4">
    	</video>
    	<video autoplay muted loop style="width: 50%;position: absolute;left: 50%;">
    		<source src="u0026_T_High_Model_Year_2020(1080p).mp4" type="video/mp4">
    	</video></a>
    	<h4 style="position: absolute;top: -100px;color: white;font-family: cursive;font-size: 70px;font-style: cursive;">Welcome To</h4>
    	<h4 style="position: absolute;top: 260px;left: 50%;color: white;font-family: fantasy;font-size: 70px;font-style: fantasy;">Renault Trucks</h4>
    </div>
    <div class="daf" style="position: absolute;top: 2505px;">
    	<a href="#"><video autoplay muted loop width="100%">
    		<source src="_this_is_who_we_are(1080p).mp4" type="video/mp4">
    	</video></a>
    	<h4 style="position: absolute;top: -100px;color: white;font-family: fantasy;font-style: fantasy;font-size: 70px;font-weight: bold;">#ThumbsUpForTrucker</h4>
    	<h4 style="position: absolute;top: 600px;left: 80%;color: white;font-family: cursive;font-style: cursive;font-size: 70px;font-weight: bold;">Proud DAF NV</h4>

    </div>
    <div class="iveco" style="position: absolute;top: 3358px;">
    	</a><video autoplay muted loop width="50%">
    		<source src="iveco.mp4" type="video/mp4">
    	</video>
    	<a href="#"><img src="wp2478618.jpg" style="width: 50%;position: absolute;left: 50%;">
    	<img src="1349447.jpg" style="width: 50%;position: absolute;top: 400px;left: 0px;height: 39.5%;"></a>

    </div>
    <div class="taging" style="position: absolute;top: 500px">
    	<h4 style="font-family: cursive;color: white;font-size: 70px;text-align: center;font-weight: bold;">#TruckersUnited</h4>
    </div>    


<!-- The content of your page would go here. -->
    
		<footer class="footer-distributed" style="position: absolute;top: 3850px;">
 
			<div class="footer-left">
          <img src="logo.jpg">
				<h3>About<span>F L A S H</span></h3>
 
				<p class="footer-links">
					<a href="#">Home</a>
					|
					<a href="#">Blog</a>
					|
					<a href="#">About</a>
					|
					<a href="#">Contact</a>
				</p>
 
				<p class="footer-company-name">© 2019 Flash trucking limited</p>
			</div>
 
			<div class="footer-center">
				<div>
					<a class="marker" href=""><i class="fa fa-map-marker"></i></a>
					  <p><span>309 - Rupa Solitaire,
						 Bldg. No. A - 1, Sector - 1</span>
						Mahape, Navi Mumbai - 400710</p>
				</div>
 
				<div>
					<i class="fa fa-phone"></i>
					<p>add phone number</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="#">support@flashtrucking.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					With more than 125 years of successful business, we have a lot to tell. Learn more about Scania’s history, discover the role we play in sustainable transport and read all our news.</p>
				<div class="footer-icons">
					<a class="facebook" href="https://www.facebook.com/campaign/landing.php?campaign_id=1653993517&extra_1=s%7Cc%7C318504235901%7Ce%7Cfacebook%20%27%7C&placement=&creative=318504235901&keyword=facebook%20%27&partner_id=googlesem&extra_2=campaignid%3D1653993517%26adgroupid%3D63066387003%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D1t1%26target%3D%26targetid%3Dkwd-360705453827%26loc_physical_ms%3D9040190%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=CjwKCAiA98TxBRBtEiwAVRLqu44a2Kavp8vnsMkQMHOmFEkUHSwMrZRWF_B1_4LsmBW2fK96wd-gJBoCCOkQAvD_BwE"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
					<a class="instagram" href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="youtube" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</footer>

</body>
</html>