<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['agrovid']==0)) {
  header('location:logout.php');
  } else{ ?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>KRISHAN BAZAR WEBSITE-Vendor's Dashboard</title>
    
                <div class="card-header white">
                    <h1>Dashboard </h1>
                </div>
</head>
<body>
           
           <?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        
        <div class="hk-pg-wrapper">
   
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hk-row">  


<?php
$query=mysqli_query($con,"select id from tblcategory");
$listedcat=mysqli_num_rows($query);
?>
<div class="col-lg-3 col-md-6">
<div class="card card-sm">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-dark font-weight-500">Total Updated Categories</span>
</div>
<div>
</div>
</div>
<div class="text-center">
<span class="d-block display-4 text-dark mb-5"><?php echo $listedcat;?></span>
<small class="d-block">Categories</small>
</div>
</div>
</div>
</div>   




<?php
$sql=mysqli_query($con,"select id from tblproducts");
$listedproduct=mysqli_num_rows($sql);
?>
<div class="col-lg-3 col-md-6">
<div class="card card-sm">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-dark font-weight-500">Total Updated Products</span>
</div>
<div>
</div>
</div>
<div class="text-center">
<span class="d-block display-4 text-dark mb-5"><?php echo $listedproduct;?></span>
<small class="d-block">Products</small>
</div>
</div>
</div>
</div>   
                           
                           
</body>
</html>
<?php } ?>