<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['agroctid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
   $aid=$_GET['editid'];
   $ctid=$_POST['customerid'];
     $query=mysqli_query($con, "update tblcustomer set CustomerId ='$ctid' where ID='$aid'");
    if ($query) {
    $msg="Customer id has been updated.";
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
    <title>KRISHAN BAZAR WEBSITE-Set Customer Id</title>
    
</head>
<body class="light">

<div id="app">
<?php include_once('includes/navbar.php');?>

<?php include_once('includes/sidebar.php');?>
   
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Customer Id
                    </h4>
                </div>
            </div>
      

   
                   
                        <div class="card-body b-b">
                            <form method="post" enctype="multipart/form-data">
                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 $aid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblcustomer where ID='$aid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<table class="table table-bordered table-hover data-tables">
  <tr>
     <td><b>Name</b></td>
     <td> &nbsp;</td>
     <td><?php  echo $row['FullName'];?></td>
  </tr>
                                
  <tr>
     <th>Set Id</th>
     <td> &nbsp;</td>
     <td><input type="text" class="form-control" id="customerid" placeholder="Set Id" name="customerid" required autocomplete="off"></td>
  </tr>
</table>
                                
                               
                               
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>                         
        <p><a href="view-customer-details.php?viewid=<?php echo $row['ID'];?>"> Back!!</a></p> 
                            </div>
    </div>
                <?php }?>
                   
</body>
</html>
