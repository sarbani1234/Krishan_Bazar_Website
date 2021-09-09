<?php
$insertalert=false;
$inserterroralert=false;
$existerroralert=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'includes/dbconnect.php';
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $Email=$_POST['Email'];
    $Mobile=$_POST['Mobile'];
    $Address=$_POST['Address'];
    $City=$_POST['City'];
    $State=$_POST['State'];
    $Pin=$_POST['Pin'];
    $Gender=$_POST['Gender'];
    $Dob=$_POST['Dob'];
    $Viewid=$_POST['Viewid'];
    $Password=$_POST['Password'];
    $CPassword=$_POST['CPassword'];
    $Files=$_FILES['Files'];
    $filename=$Files['name'];
    $filetmp=$Files['tmp_name'];
    $destination='image/'.$filename;
    move_uploaded_file($filetmp, $destination);
    $result=mysqli_query($conn,"SELECT * FROM `vsignup` WHERE Email='$Email'");
    $rows=mysqli_num_rows($result);
    if($rows>0)
    {
        $existerroralert=true;
    }
    else
    if($Password == $CPassword)
    {
      $hash=password_hash($Password, PASSWORD_DEFAULT);
      $result= mysqli_query($conn,"INSERT INTO vsignup (Fname, Lname, Email, Mobile, Address, City, State, Pin, Dob, Viewid, Gender, File, Password, Date) VALUES ('$Fname', '$Lname', '$Email', '$Mobile', '$Address', '$City', '$State', '$Pin', '$Dob', '$Viewid', '$Gender','$destination', '$hash', current_timestamp())");
      if($result)
      {
        $insertalert=true;
      }
      else
      {
        echo "insertion failed".mysqli_error($conn);
      }
    }
    else
    {
      $inserterroralert=true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>SignUp</title>
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

    <title>Sign Up</title>
  </head>
  <body>
    <?php
    require 'includes/newnav.php';
    if($insertalert)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Account created successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($inserterroralert)
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Password doesn\'t match.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($existerroralert)
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry!</strong> Username already exists.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
  <div class="container mt-3">
        <h2 align="center">Please fill out the form</h2><br>
        <form action="ownersignup.php" method="post" enctype="multipart/form-data">
      <div class="container">
        <div class="container row my-4">
          <div class="col">
            <input type="text" class="form-control" id="Fname" name="Fname" placeholder="First name" required="true">
          </div>
          <div class="col">
            <input type="text" class="form-control" id="Lname" name="Lname" placeholder="Last name" required="true">
          </div>
        </div>
       <div class="container row my-4">
          <div class="col">
            <input type="Email" class="form-control" name="Email" id="Email" placeholder="Enter Email" required="true">
          </div>
          <div class="col">
            <input type="text" class="form-control" name="Mobile" id="Mobile" placeholder="Mobile Number" required="true">
          </div>
        </div>
        <div class="container row my-4">
          <div class="col">
            <input type="text" class="form-control" placeholder="Address" name="Address" id="Address" required="true">
          </div>
        </div>
        <div class="container row my-4">
          <div class="col">
            <input type="text" class="form-control" placeholder="City" name="City" id="City" required="true">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="State" name="State" id="State" required="true">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Pin" name="Pin" id="Pin" required="true">
          </div>
        </div>
        <div class="container row my-4">
          <div class="col">
            <input type="date" class="form-control" name="Dob" id="Dob">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="ID" name="Viewid" id="Viewid">
          </div>
          <div class="col" align="center">
            <label><b>Gender</b></label>
            <input type="radio" name="Gender" id="Gender" value="Female">Female
            <input type="radio" name="Gender" id="Gender" value="Male">Male
            <input type="radio" name="Gender" id="Gender" value="Others">Others
          </div>
        </div>
        <div class="container row my-4">
              <div class="col">
                <input type="File" class="form-control" accept=".jpg, .jpeg, .gif, .png" name="Files" id="Files" required="true">
              </div>
            </div>
        <div class="container row my-4">
          <div class="col">
            <input type="Password" class="form-control" placeholder="Password" name="Password" id="Password" required="true">
          </div>
          <div class="col">
            <input type="Password" class="form-control" placeholder="Confirm Password" name="CPassword" id="CPassword" required="true">
          </div>
        </div>
        <div class="container row my-4">
          <div class="col">
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <button type="reset" class="btn btn-primary">Reset</button>
          </div>
        </div>
      </div>
      <center>Already have an account? <a href="ownerlogin.php">Click Here</a> to login</center>
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