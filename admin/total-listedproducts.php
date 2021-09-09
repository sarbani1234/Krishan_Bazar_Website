<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['agroaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE html>
<html lang="xxx">
<head>
    
    <title>KRISHAN BAZAR WEBSITE-Listed Items</title>
    
<body>
    
   
	

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
                        Listed Items
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
                        <div class="card-title">Listed Items</div>
                        <table class="table table-bordered table-hover data-tables"
                               data-options='{ "paging": false; "searching":false}' border="1">
                            <thead>  <tr>
                  <th>S.NO</th>
            
                  <th>Category Name</th>
                  <th>Product Name</th>
                    <th>Posting Date</th>       
                   <th>Action</th>
                </tr>
                            </thead>
                            <tbody>
                                <?php
                               
$ret=mysqli_query($con,"select *from  tblproducts");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                           <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['CategoryName'];?></td>
                   <td><?php  echo $row['ProductName'];?></td>
                  <td><?php  echo $row['PostingDate'];?></td>
                  <td><a href="view-products-details.php?viewid=<?php echo $row['ID'];?>">View Details</a></td>
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