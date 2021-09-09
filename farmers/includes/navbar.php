 
<?php
$uid=$_SESSION['agrouid'];
$ret=mysqli_query($con,"select FullName,Images from tblfarmer where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];
$imgs=$row['Images'];
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
</div>
     <div>
           

                        <img style="position: absolute;top: 250px;right: 40px;width: 300px;" src="images/<?php echo $imgs; ?>">
                        <span style="position: absolute;top: 250px;left: 50px;font-family: cursive;font-size: 40px;color: #3D5B59;">Welcome,</span>
        <div style="position: absolute;top: 300px;left: 100px;font-family: cursive;font-size: 40px;color: #3D5B59;">
                        <?php echo $name; ?>
                            </div>
    </div>
                      
</body>
</html>