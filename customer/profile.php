<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['agroctid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['update']))
  {
    $ctid=$_SESSION['agroctid'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $mobno=$_POST['mobilenumber'];
    $gender=$_POST['gender'];
    $add=$_POST['add'];
     $city=$_POST['city'];
    $pincode=$_POST['pincode'];
  
  

    
  
     $query=mysqli_query($con, "update tblcustomer set FullName ='$fullname', Email='$email',MobileNumber='$mobno',Gender='$gender',Address='$add',City='$city',Pincode='$pincode' where ID='$ctid'");
 if ($query) {
    $msg="Profile has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
} 

 
  ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>KRISHAN BAZAR WEBSITE-Customer Profile</title>
    
</head>
<body class="light">


<?php include_once('includes/navbar.php');?>

<?php include_once('includes/sidebar.php');?>
  
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Customer Profile
                    </h4>
                </div>
            </div>
        
        
                        <div class="card-body b-b">
                            <form method="post" enctype="multipart/form-data">
                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  <?php
$ctid=$_SESSION['agroctid'];
$ret=mysqli_query($con,"select * from tblcustomer where ID='$ctid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4" class="col-form-label">Full Name</label>
                                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?php  echo $row['FullName'];?>" required='true' autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4" class="col-form-label">Email</label>
                                        <input type="text" id="email" name="email" class="form-control" value="<?php  echo $row['Email'];?>" required='true' autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress" class="col-form-label">Mobile Number</label>
                                    <input type="text" id="mobilenumber" name="mobilenumber" class="form-control" value="<?php  echo $row['MobileNumber'];?>" required='true' autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress" class="col-form-label">Customer ID</label>
                                    <input type="text" id="tid" name="tid" class="form-control" value="<?php  echo $row['CustomerId'];?>" required='true' autocomplete="off">
                                </div>
                                
                                <div class="form-group">
              <label class="control-label">Gender: </label>
              <?php  if($row['Gender']=="Female"){ ?>
              <input type="radio" name="gender" id="gender" value="Female" checked="true">Female
              <input type="radio" name="gender" id="gender" value="male">Male
              <?php } else { ?>
              <label>
              <input type="radio" name="gender" id="gender" value="Male" checked="true">Male
              <input type="radio" name="gender" id="gender" value="Female">Female
              </label>
             <?php } ?>
            </div>
            
            <div class="form-group">
                                    <label for="inputAddress" class="col-form-label">Address</label>
                                    <input type="text" id="add" name="add" class="form-control" value="<?php  echo $row['Address'];?>"  required='true' autocomplete="off">
                                </div>

                                 <div class="form-group">
                                    <label for="inputAddress" class="col-form-label">City</label>
                                    <input type="text" id="city" name="city" class="form-control" value="<?php  echo $row['City'];?>"  required='true' autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress2" class="col-form-label">Pincode</label>
                                    <input type="text" id="pincode" name="pincode" class="form-control" value="<?php  echo $row['Pincode'];?>"  required='true' autocomplete="off">
                                </div>

                               
                                <div class="form-group">
                                    <label for="inputAddress2" class="col-form-label">Registration Date</label>
                                    <input type="text" id="" name="" class="form-control" value="<?php  echo $row['CustomerRegdate'];?>"  readonly='true' autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress2" class="col-form-label">Images</label>
                                    <img src="images/<?php echo $row['Images'];?>" width="180" height="200" value="<?php  echo $row['Images'];?>"><a href="change-image.php?editid=<?php echo $row['ID'];?>"> &nbsp; Upload Image</a>
                                </div>
                               <?php } ?>
                               
                               <button class="btn btn-primary" type="submit" name="update">Update</button>
</body>
</html>
<?php } ?>