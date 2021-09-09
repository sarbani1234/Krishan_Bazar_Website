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
    
    <title>KRISHAN BAZAR WEBSITE-Registered Vendors</title>

</head>
<body class="light">

<div id="app">
<?php include_once('includes/navbar.php');?>

<?php include_once('includes/sidebar.php');?>
<div class="page has-sidebar-left bg-light height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-black">
            <div class="row">
                <div class="col">
                    <h3 class="my-3">
                        Registered Vendors
                    </h3>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
              
                <div class="card my-3 no-b">
                    <div class="card-body">
                        <div class="card-title">Registered Vendors</div>
                        <table class="table table-bordered table-hover data-tables"
                               data-options='{ "paging": false; "searching":false}' border="1">
                            <thead>
                             <tr>
                  <th>S.NO</th>
            
                  <th>Vendor Name</th>
                  <th>Company Name</th>
                    <th>Mobile Number</th>
                    <th>Registered Date</th>       
                   <th>Action</th>
                </tr>
                            </thead>
                            <tbody>
                                <?php
                               
$ret=mysqli_query($con,"select *from  tblvendor");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                           <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['FullName'];?></td>
                   <td><?php  echo $row['CompanyName'];?></td>
                  <td><?php  echo $row['MobileNumber'];?></td>
                  <td><?php  echo $row['VendorRegdate'];?></td>
                  <td><a href="view-vendor-details.php?viewid=<?php echo $row['ID'];?>">View Details</a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
                          
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


</body>
</html>
<?php }  ?>