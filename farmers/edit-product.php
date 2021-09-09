<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['agrouid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['update']))
{
$pid=substr(base64_decode($_GET['pid']),0,-5);    

$catname=$_POST['category']; 
$pname=$_POST['productname'];
$pqnty=$_POST['productqnty'];
$pprice=$_POST['productprice'];
$query=mysqli_query($con,"update tblproducts set CategoryName='$catname',ProductName='$pname',ProductQuantity='$pqnty',ProductPrice='$pprice' where ID='$pid'"); 
echo "<script>alert('Product updated successfully.');</script>";   
echo "<script>window.location.href='manage-products.php'</script>";

}

    ?>
<!DOCTYPE html>
<html lang="xxx">

<head>
    
    <title>Edit Product</title>
    
</head>

<body>
    
    
	
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
       


       
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
<li class="breadcrumb-item"><a href="#">Product</a></li>
<li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
          
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Edit Product</h4>
                </div>
                
                <div class="row">
                    <div class="col-xl-12">
<section class="hk-sec-wrapper">

<div class="row">
<div class="col-sm">
<form class="needs-validation" method="post" novalidate>
<?php
$pid=substr(base64_decode($_GET['pid']),0,-5);
$query=mysqli_query($con,"select * from tblproducts where ID='$pid'");
while($result=mysqli_fetch_array($query))
{    
?>                                       

<div class="col-md-6 mb-10">
<label for="validationCustom03">Category</label>
 <select class="form-control custom-select" name="category" required>
<option value="<?php echo $result['CategoryName'];?>"><?php echo $catname=$result['CategoryName'];?></option>
<?php
$ret=mysqli_query($con,"select CategoryName from tblcategory");
while($row=mysqli_fetch_array($ret))
{?>
<option value="<?php echo $row['CategoryName'];?>"><?php echo $row['CategoryName'];?></option>
<?php } ?>
</select>
<div class="invalid-feedback">Please select a category.</div>
</div>



 <div class="col-md-6 mb-10">
<label for="validationCustom03">Product Name</label>
<input type="text" class="form-control" id="validationCustom03" value="<?php echo $result['ProductName'];?>" name="productname" required autocomplete="off">
<div class="invalid-feedback">Please provide a valid product name.</div>
</div>

 
<div class="col-md-6 mb-10">
<label for="validationCustom03">Product Quantity</label>
<input type="text" class="form-control" id="validationCustom03" value="<?php echo $result['ProductQuantity'];?>" name="productqnty" required autocomplete="off">
<div class="invalid-feedback">Please provide a valid Quantity.</div>
</div>


<div class="col-md-6 mb-10">
<label for="validationCustom03">Product Price</label>
<input type="text" class="form-control" id="validationCustom03" value="<?php echo $result['ProductPrice'];?>" name="productprice" required autocomplete="off">
<div class="invalid-feedback">Please provide a valid product price.</div>
</div>


<?php } ?>
<button class="btn btn-primary" type="submit" name="update">Update</button>
</form>
</div>
</div>
</section>
                     
</div>
</div>

</body>
</html>
<?php } ?>