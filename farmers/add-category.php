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

$catname=$_POST['category'];
$name=$_POST['farmername'];  
$catcode=$_POST['categoryid'];   
$query=mysqli_query($con,"insert into tblcategory(FarmerName,CategoryName,CategoryId) value('$name','$catname','$catcode')"); 
 if($query){
echo "<script>alert('Category added successfully.');</script>";   
echo "<script>window.location.href='add-category.php'</script>";
} else{
echo "<script>alert('Something went wrong. Please try again.');</script>";   
echo "<script>window.location.href='add-category.php'</script>";    
}
}
    ?>
<!DOCTYPE html>
<html lang="xxx">

<head>
   
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
<form class="needs-validation" method="post" novalidate>  



     
                                       
<div style="position: absolute;top: 400px;left: 100px;">
<label for="validationCustom03">Category</label>
<input type="text" class="form-control" id="validationCustom03" placeholder="Category" name="category" required autocomplete="off">
<div class="invalid-feedback">Please provide a valid category name.</div>


<div class="form-row">
<div class="col-md-6 mb-10">
<label for="validationCustom03">Category Id</label>
<input type="text" class="form-control" id="validationCustom03" placeholder="Category Id" name="categoryid" required autocomplete="off">
<div class="invalid-feedback">Please provide a valid category Id.</div>
</div>
</div>
                                 
<button  style="position: absolute;top: 100px;left: 50%;" class="fill" type="submit" name="submit">Submit</button>



</div>

</form>
 <!--footer starts here-->
  <footer class="footer-distributed" style="position: absolute;top: 550px;">
 
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