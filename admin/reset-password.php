<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
    
    $username=$_SESSION['user'];
    $password=$_POST['newpassword'];

        $query=mysqli_query($con,"update tbladmin set Password='$password'  where  UserName='$username' ");
   if($query)
   {
echo "<script>alert('Password successfully changed');</script>";
session_destroy();
   }
  
  }
  ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    
    <title>KRISHAN BAZAR WEBSITE-Reset Password Page</title>
   
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

                <div class="col-lg-6 p-t-100">
                    <div class="text-white">
                        <h1>Forgot Password</h1>
                        <p class="s-18 p-t-b-20 font-weight-lighter">Hey Buddies if you forgot your password reset from here !</p>
                    </div>
                   <form method="post" action="" name="changepassword" onsubmit="return checkpass();">
     
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                 <input type="password" name="newpassword" class="orm-control form-control-lg" placeholder="New Password" required="true" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                <input type="password" name="confirmpassword" class="form-control form-control-lg no-b" placeholder="Confirm Password" required="true" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="Reset">
                                <p class="forget-pass text-white"><a href="login.php">Already have an account</a></p>
                                 <p class="forget-pass text-white"><a href="../index.php"> Back to Home!!</a></p>
                            </div>
                        </div>
                    </form>
                </div>
           
</body>
</html>