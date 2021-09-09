<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['agrovid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
{
$vendorid=$_SESSION['agrovid'];
$cpassword=md5($_POST['currentpassword']);
$newpassword=md5($_POST['newpassword']);
$query=mysqli_query($con,"select ID from tblvendor where ID='$vendorid' and   Password='$cpassword'");
$row=mysqli_fetch_array($query);
if($row>0){
$ret=mysqli_query($con,"update tblvendor set Password='$newpassword' where ID='$vendorid'");
echo "<script>alert('Password changed successfully.');</script>";   
echo "<script>window.location.href='change-password.php'</script>";
} else {
echo "<script>alert('Your current password is wrong');</script>";   
echo "<script>window.location.href='change-password.php'</script>";
}



}

    ?>
<!DOCTYPE html>
<html lang="xxx">

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
</head>
<body>
	
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
       


       
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
<li class="breadcrumb-item"><a href="#">Change Password</a></li>
<li class="breadcrumb-item active" aria-current="page">Vendor</li>
                </ol>
            </nav>
            
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Change Password</h4>
                </div>
               
                    <div class="col-xl-12">
<section class="hk-sec-wrapper">

<div class="row">
<div class="col-sm">
<form class="needs-validation" method="post" name="changepassword" novalidate onsubmit="return checkpass();">
                                       

<div class="col-md-6 mb-10">
<label for="validationCustom03">Current Password</label>
<input type="password" class="form-control" id="currentpassword" placeholder="Current Passsword" name="currentpassword" required autocomplete="off">
<div class="invalid-feedback">Please provide  current password.</div>
</div>



<div class="col-md-6 mb-10">
<label for="validationCustom03">New Password</label>
<input type="password" class="form-control" id="newpassword" placeholder="New Passsword" name="newpassword" required autocomplete="off">
<div class="invalid-feedback">Please provide  new password.</div>
</div>



<div class="col-md-6 mb-10">
<label for="validationCustom03">Confirm Password</label>
<input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Passsword" name="confirmpassword" required autocomplete="off">
<div class="invalid-feedback">Please provide  confirm password.</div>
</div>

                                 
<button class="btn btn-primary" type="submit" name="submit">Change</button>
</form>
</div>
</div>
</section>
                     
</div>


</body>
</html>
<?php } ?>