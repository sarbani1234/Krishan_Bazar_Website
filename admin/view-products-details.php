<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['agroaid']==0)) {
  header('location:logout.php');
  } else{
   if(isset($_GET['del'])){    
$appid=substr(base64_decode($_GET['del']),0,-5);
$query=mysqli_query($con,"delete from tblapprove where ID='$appid'");
echo "<script>alert('Product record deleted.');</script>";   
echo "<script>window.location.href='Product_approve.php'</script>";
}



  ?>
<!DOCTYPE html>
<html >
<head>
    
<link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="footer.css">  

</head>
<body topmargin = 0 leftmargin = 0>
<div class="header">
    <img class="logo" src="a430e409239fe7d460e7dcad29afd43e.png">
    <a href="../index.php" style="font-family: cursive;font-size: 50px;font-weight: bold;color: white;position: absolute;left: 20px;top: 40px;text-decoration: none;">Krishan Bazar</a>
  </div>

<?php include_once('includes/navbar.php');?>

<?php include_once('includes/sidebar.php');?>

             <div style="position: absolute;top: 400px;left: 100px;">      
 <?php
$rno=mt_rand(10000,99999); 
$ppid=$_GET['ppvid'];
$ret=mysqli_query($con,"select * from tblapprove where ID='$ppid'");
$cnt=1;
while($row=mysqli_fetch_array($ret)) {

echo'
      
        <form id="checkout_form" action="Product_approve-process.php" method="POST" class="was-validated">

            <label >Farmer Name</label>
            <input type="text" id="fname" class="form-control" name="farmername" value="'.$row["FarmerName"].'"><br> <br>
            <label> Category Name</label>
            <input type="text" id="catname" name="catname" class="form-control" value="'.$row["CategoryName"].'" required><br> <br>

            <label> Product Name</label>
            <input type="text" id="prdctname" name="prdctname" class="form-control" value="'.$row["ProductName"].'" required><br> <br>

            <label> Product Quantity</label>
            <input type="text" id="prdctqnty" name="prdctqnty" class="form-control" value="'.$row["ProductQuantity"].'" required><br> <br>

              <label>Product Price</label>
                                    <input type="text" id="prdctprice" name="prdctprice" class="form-control" value="'.$row["ProductPrice"].'" required> <br> <br>';


        echo'
          
          <input type="submit" id="submit"  name="submit" value="Approve" class="checkout-btn">
        </form>';} ?> <br> 

  <span><div style="position: absolute;top: 200px;left: 100px;"><button> <a href="view-products-details.php?del=<?php echo base64_encode($row['ID'].$rno);?>" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Do you really want to delete?');">Delete</a></button></div></span>
 
   </div>
   <!--footer starts here-->
  <footer class="footer-distributed" style="position: absolute;top: 700px;">
 
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
<?php }  ?>