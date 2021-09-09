<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['agrovid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
   $cid=$_GET['editid'];
    $imgs=$_FILES["vimages"]["name"];
$extension = substr($imgs,strlen($imgs)-4,strlen($imgs));

$allowed_extensions = array(".jpg","jpeg",".png",".gif");
  
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Featured image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}

else
{

$vimages=md5($imgs).time().$extension;
 move_uploaded_file($_FILES["vimages"]["tmp_name"],"images/".$vimages);
     $query=mysqli_query($con, "update tblvendor set Images ='$vimages' where ID='$cid'");
    if ($query) {
    $msg="Images has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }
}
  ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>KRISHAN BAZAR WEBSITE-Change Images</title>
    
</head>
<body class="light">

<div id="app">
<?php include_once('includes/navbar.php');?>

<?php include_once('includes/sidebar.php');?>
   
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Vendor Image
                    </h4>
                </div>
            </div>
      

   
                   
                        <div class="card-body b-b">
                            <form method="post" enctype="multipart/form-data">
                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 $eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblvendor where ID='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <div class="form-group">
                                    <label for="inputAddress2" class="col-form-label">Image</label>
                                    <img src="images/<?php echo $row['Images'];?>" width="100" height="100" value="<?php  echo $row['Images'];?>">
                                </div>
                                <div class="form-group">
                                            <label for="inputAddress2" class="col-form-label">New Image</label>
                                            <input type="file" class="form-control" name="vimages" required='true'>
                                        </div>
                               <?php } ?>
                               
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                
                   
</body>
</html>
<?php } ?>