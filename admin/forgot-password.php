<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
   
    $username=$_POST['user'];

        $query=mysqli_query($con,"select ID from tbladmin where  UserName='$username' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['user']=$username;
     header('location:reset-password.php');
    }
    else{
    echo "<script>alert('Inavalid details. Please try again!');</script>";
    }
  }
  ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    
    <title>KRISHAN BAZAR WEBSITE-Forgot Password Page</title>
    
</head>
<body class="light">

                <div class="col-lg-6 p-t-100">
                    <div class="text-white">
                        <h1>Forgot Password</h1>
                        <p class="s-18 p-t-b-20 font-weight-lighter">Hey Buddies if you forgot your password reset from here !</p>
                    </div>
                   <form method="post" action="">
                    
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                    <input type="text" class="form-control form-control-lg"
                               placeholder="UserName" name="user" required="true" autocomplete="off">
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="Go ---->">
                                <p class="forget-pass text-white"><a href="login.php">Already have an account</a></p>
                                <p class="forget-pass text-white"><a href="../index.php"> Back to Home!!</a></p> 
                            </div>
                        </div>
                    </form>
                </div>
            
</body>
</html>