<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
   
    $email=$_POST['email'];

        $query=mysqli_query($con,"select ID from tblfarmer where  Email='$email' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['email']=$email;
     header('location:reset-password.php');
    }
    else{
      $msg="Invalid Details. Please try again.";
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
                    <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                    <input type="text" class="form-control form-control-lg"
                               placeholder="Email Address" name="email" required="true" autocomplete="off">
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