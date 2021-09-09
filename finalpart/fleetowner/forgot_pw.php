
<?php
$error=false;
$pass=false;
$success=false;
include 'includes/newnav.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'includes/dbconnect.php';
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $CPassword=$_POST['CPassword'];
    $result=mysqli_query($conn,"SELECT * FROM `vsignup` WHERE Email='$Email'");
    $rows=mysqli_num_rows($result);
    if($rows==1)
    {
    	$res=mysqli_fetch_array($result);
    	$no=$res['Sno'];
        if($Password==$CPassword)
        {
            $hash=password_hash($Password, PASSWORD_DEFAULT);
        	$result=mysqli_query($conn,"UPDATE `vsignup` SET `Password` = '$hash' WHERE `vsignup`.`Sno` = $no");
        	if($result)
        	{
        		$success=true;
        	}
        	else
        	{
        		die (mysqli_connect_error());
        	}
        }
        else
        {
        	$pass=true;
        }
    }
    else
    {
    	$error=true;
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>F_Password</title>
  </head>
  <body>
  	<?php
  	if($error)
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> No such Username exists.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($pass)
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>Password doesn\'t match.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($success)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Error!</strong>Password changed successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    
<div class="container mt-3">
	<h2 align="center">Please enter your Username</h2><br>
    <form action="forgot_pw.php" method="post">
      <div class="container">
        <div class="container row my-4">
          <div class="col">
            <input type="Email" class="form-control" name="Email" id="Email" placeholder="Enter Email" required="true">
          </div>
          <div class="container row my-4">
          <div class="col">
            <input type="Password" class="form-control" name="Password" id="Password" placeholder="Enter Password" required="true">
          </div>
          <div class="col">
            <input type="Password" class="form-control" name="CPassword" id="CPassword" placeholder="Confirm Password" required="true">
          </div>
        </div>
        <div class="container row my-4">
          <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
       <center> <a href="ownerlogin.php">Click Here</a> to login</center>
      </div>
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