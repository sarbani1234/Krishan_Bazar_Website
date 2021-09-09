<?php
$erroralert=false;
$log=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'includes/dbconnect.php';
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $result=mysqli_query($conn,"select * from vsignup where Email= '$Email'");
    $num=mysqli_num_rows($result);
      if($num==1)
      {
        while($row=mysqli_fetch_assoc($result))
        {
          if(password_verify($Password, $row['Password']))
          {
          $log=true;
          session_start();
          $_SESSION['loggedin']=true;
          $_SESSION['Email']=$Email;
          header("location:newcard.php");
        }
        else
      {
        $erroralert=true;
      }
        }
        
        
      }
      else
      {
        $erroralert=true;
      }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <?php
    require 'includes/newnav.php';
    if($log)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($erroralert)
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Incorrect Details.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <div class="container mt-3" align="center">
        <h2 align="center">Please Login to Continue</h2><br>
        <form action="ownerlogin.php" method="post">
            <div class="form-group col-md-6">
                  <input type="email" name="Email" id="Email" placeholder="Enter Email" class="form-control" required="true"><br>
            </div>
            <div class="form-group col-md-6">
                  <input type="Password" name="Password" id="Password" placeholder="Enter Password" class="form-control" required="true"><br>
            </div>
            <div class="form-group col-md-6" align="left">
                  <button type="submit" class="btn btn-primary">Login</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
            </div>
            <div><a href="forgot_pw.php">Forgot Password?</a></div>
            <center>OR</center>
            <div><a href="ownersignup.php">Sign Up</a></div>
        </form>
    </div>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
</body>
</html>