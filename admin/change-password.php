<?php
session_start();
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['agroaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
{
$adminid=$_SESSION['agroaid'];
$cpassword=$_POST['currentpassword'];
$newpassword=$_POST['newpassword'];
$query=mysqli_query($con,"select ID from tbladmin where ID='$adminid' and   Password='$cpassword'");
$row=mysqli_fetch_array($query);
if($row>0){
$ret=mysqli_query($con,"update tbladmin set Password='$newpassword' where ID='$adminid'");
$msg= "Your password successully changed"; 
} else {

$msg="Your current password is wrong";
}



}

  
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  
  
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
<body class="light">
 
<header>
<?php include_once('includes/navbar.php');?>

<?php include_once('includes/sidebar.php');?>
   
                    <h4>
                        <i class="icon-package"></i>
                        Change Password
                    </h4>
            
    </header>

<div style="position: absolute;top: 400px;">   
                   
                        <div class="card-body b-b">
                            <form method="post" name="changepassword" onsubmit="return checkpass();" action="">
                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
$adminid=$_SESSION['agroaid'];
$ret=mysqli_query($con,"select * from tbladmin where ID='$adminid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
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
                                
                               <?php } ?>
                               
                                <button type="submit" name="submit" class="btn btn-primary">Change</button>
                            </form>
                        </div>
        </div>
</body>
</html>
<?php } ?>