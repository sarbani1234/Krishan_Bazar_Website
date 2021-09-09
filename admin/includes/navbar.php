     <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-menu"></i></a>
            
<?php
$aid=$_SESSION['agroaid'];
$ret=mysqli_query($con,"select AdminName,Images from tbladmin where ID='$aid'");
$row=mysqli_fetch_array($ret);
$imgs=$row['Images'];
$name=$row['AdminName'];
?>     
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
    <div class="navbartop">
  <a href="profile.php">profile</a>
  <a href="change-password.php">Settings</a>
  <a href="logout.php">logout</a>
  <a href="about-us.php">about us</a>
  <a href="contact-us.php">contact us</a>
</div>
     <div>

            <img style="position: absolute;top: 250px;right: 40px;" src="images/<?php echo $imgs; ?>">
        </div>
        <span style="position: absolute;top: 250px;left: 50px;font-family: cursive;font-size: 40px;color: #3D5B59;">Welcome,</span>
        <div style="position: absolute;top: 300px;left: 100px;font-family: cursive;font-size: 40px;color: #3D5B59;">
            Mr. <?php echo $name; ?>
          </div>
    </div>
    
</body>
</html>                   
                   