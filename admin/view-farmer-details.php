<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['agroaid']==0)) {
  header('location:logout.php');
  } else{
    
  ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>KRISHAN BAZAR WEBSITE-Farmer Details</title>

</head>
<body class="light">


<?php include_once('includes/navbar.php');?>
<?php include_once('includes/sidebar.php');?>
   
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Farmer Profile
                    </h4>
                </div>
            </div>
        
    

    
                   
                        <div class="card-body b-b">

  <?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblfarmer where ID='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <table class="table table-bordered table-hover data-tables">
                                    <tr>
  <th>Full Name</th>
  <td><?php  echo $row['FullName'];?></td>
  </tr>
    <tr>
  <th>Farmer ID</th>
  <td><?php  echo $row['FarmerId'];?></td>
  </tr>
  <tr>
  <th>Email</th>
  <td><?php  echo $row['Email'];?></td>
  </tr>
  <tr>
  <th>Mobile Number</th>
  <td><?php  echo $row['MobileNumber'];?></td>
  </tr> 
  
  <tr>
  <th>Gender</th>
  <td><?php  echo $row['Gender'];?></td>
  </tr>
  <tr>
  <th>Address</th>
  <td><?php  echo $row['Address'];?></td>
  </tr>
   <tr>
  <th>Pincode</th>
  <td><?php  echo $row['Pincode'];?></td>
  </tr>
  <tr>
  <th>City</th>
  <td><?php  echo $row['City'];?></td>
  </tr>
   <tr>
  <th>District</th>
  <td><?php  echo $row['District'];?></td>
  </tr>
   <tr>
  <th>State</th>
  <td><?php  echo $row['State'];?></td>
  </tr>
  <tr>
  <th>DOB</th>
  <td><?php  echo $row['DOB'];?></td>
  </tr>
  <tr>
  <th>Farmer Image</th>
  <td><img src="../farmers/images/<?php echo $row['Images'];?>" width="200" height="150" value="<?php  echo $row['Images'];?>"></td>
  </tr>
  <tr>
  <th>Farmer Registration Date</th>
  <td><?php  echo $row['FarmerRegdate'];?></td>
  </tr>

</table>
<div style="position: absolute;top: 970px;left: 490px;color: red;font-family: cursive;font-stretch: extra-expanded;font-weight: bold;"><a href="set-farmerid.php?editid=<?php echo $row['ID'];?>">Set Id</a></div>

                               
                               <?php } ?>
                               
                              
                        </div>
 
</body>
</html>
<?php } ?>