<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['agrouid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
{
$farmerid=$_SESSION['agrouid'];
$cpassword=md5($_POST['currentpassword']);
$newpassword=md5($_POST['newpassword']);
$query=mysqli_query($con,"select ID from tblfarmer where ID='$farmerid' and   Password='$cpassword'");
$row=mysqli_fetch_array($query);
if($row>0){
$ret=mysqli_query($con,"update tblfarmer set Password='$newpassword' where ID='$farmerid'");
echo "<script>alert('Password changed successfully.');</script>";   
echo "<script>window.location.href='change-password.php'</script>";
} else {
echo "<script>alert('Your current password is wrong');</script>";   
echo "<script>window.location.href='change-password.php'</script>";
}



}

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Change Password</title>
    
<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
}   
</script>
    <link rel="stylesheet" type="text/css" href="header.css">
      <link rel="stylesheet" type="text/css" href="custlogin.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="custlogin2.css">
    <link rel="stylesheet" type="text/css" href="custlogin3.css">
  <link rel="stylesheet" type="text/css" href="footer.css">    
</head>
<body topmargin = 0 leftmargin = 0>
	<div class="header">
    <img class="logo" src="a430e409239fe7d460e7dcad29afd43e.png">
    <a href="../index.php" style="font-family: cursive;font-size: 50px;font-weight: bold;color: white;position: absolute;left: 20px;top: 40px;text-decoration: none;">Krishan Bazar</a>
  </div>
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>

            
                
                    
               
<form class="needs-validation" method="post" name="changepassword" novalidate onsubmit="return checkpass();">
                                       
<span style="position: absolute;top: 400px;left: 40px;font-family: fantasy;font-size: 30px;">Now you can update your Password here</span>

<label style="position: absolute;top: 500px;left: 40px;font-family: monospace;font-size: 25px;">Current Password</label>
<input  style="position: absolute;top: 550px;left: 40px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="password" id="currentpassword" placeholder="Current Passsword" name="currentpassword" required autocomplete="off">
<div>Please provide  current password.</div>




<label style="position: absolute;top: 600px;left: 40px;font-family: monospace;font-size: 25px;">New Password</label>
<input  style="position: absolute;top: 650px;left: 40px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="password" id="newpassword" placeholder="New Passsword" name="newpassword" required autocomplete="off">
<div>Please provide  new password.</div>




<label style="position: absolute;top: 700px;left: 40px;font-family: monospace;font-size: 25px;">Confirm Password</label>
<input  style="position: absolute;top: 750px;left: 40px;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="password" id="confirmpassword" placeholder="Confirm Passsword" name="confirmpassword" required autocomplete="off">
<div>Please provide  confirm password.</div>


                                 
<button style="position: absolute;top: 900px;left: 50%;" class="fill" type="submit" name="submit">Change</button>
</form>
<!--footer starts here-->
  <footer class="footer-distributed" style="position: absolute;top: 1000px;">
 
      <div class="footer-left">
          <img src="a430e409239fe7d460e7dcad29afd43e.png">
        <h3>About<span>KRISHAN BAZAR</span></h3>
 
        <p class="footer-links">
          <a href="../index.php">Home</a>
          |
          <a href="#">Farmer</a>
          |
          <a href="#">Vendor </a>
          |
          <a href="#">Contact</a>
        </p>
 
        <p class="footer-company-name">© 2019 Krishan bazar limited</p>
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
          <p><a href="#">support@krishanbazar.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the company</span>
          With more than 125 years of successful business, we have a lot to tell. Learn more about ours history, discover the role we play in sustainable transport and read all our news.</p>
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
<?php } ?>