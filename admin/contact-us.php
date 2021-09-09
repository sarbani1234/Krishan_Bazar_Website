<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['agroaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$agaid=$_SESSION['agroaid'];
 $pagetitle=$_POST['pagetitle'];
 $email=$_POST['email'];
 $mobnum=$_POST['mobnum'];
$pagedes=$_POST['pagedes'];

 $query=mysqli_query($con,"update tblpage set PageTitle='$pagetitle',PageDescription='$pagedes',Email='$email',MobileNumber='$mobnum' where  PageType='contactus'");

    if ($query) {
    $msg="Contact Us has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>KRISHAN BAZAR WEBSITE-Contact Us</title>
    
     <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</head>

<body class="light">

<div id="app">
<?php include_once('includes/navbar.php');?>
<?php include_once('includes/sidebar.php');?>
  
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Contact Us
                    </h4>
                </div>
            </div>
 

   
                   
                        <div class="card-body b-b">
                            <form method="post">
                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 
$ret=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4" class="col-form-label">Page Title</label>
                                        <input type="text" name="pagetitle" id="pagetitle" value="<?php  echo $row['PageTitle'];?>" class="form-control" required='true'>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4" class="col-form-label">Page Description</label>
                                       <textarea name="pagedes" id="pagedes" rows="5" class="form-control">
        <?php  echo $row['PageDescription'];?></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4" class="col-form-label">Email Address</label>
                                        <input type="email" name="email" id="email" value="<?php  echo $row['Email'];?>" class="form-control" required='true'>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4" class="col-form-label">Contact Number</label>
                                        <input type="text" name="mobnum" id="mobnum" value="<?php  echo $row['MobileNumber'];?>" class="form-control" required='true' maxlength="10" pattern='[0-9]+'>
                                    </div>
                                </div>
                               
                               <?php } ?>
                               
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                
             
</body>
</html>
<?php } ?>