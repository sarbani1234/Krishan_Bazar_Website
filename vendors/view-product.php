<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="xxx">
<head>
    
    <title>View Listed Products</title>
    
<body>
    
   
	<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
   

       
           
<div class="hk-pg-header">
 <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Listed Products</h4>
                </div>
                
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                     <div class="card-title">Listed Products</div>
                                            <table class="table table-bordered table-hover data-tables"
                               data-options='{ "paging": false; "searching":false}' border="1">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Category</th>
                                                    <th>Product Name</th>
                                                    <th>Product Quantity</th>
                                                    <th>Pricing/Kg</th>
                                                    <th>Posting Date</th>
                                                    <th>Product By</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
$rno=mt_rand(10000,99999);  
$query=mysqli_query($con,"select * from tblproducts");
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>                                                
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['CategoryName'];?></td>
<td><?php echo $row['ProductName'];?></td>
<td><?php echo $row['ProductQuantity'];?></td>
<td><?php echo $row['ProductPrice'];?></td>
<td><?php echo $row['PostingDate'];?></td>
<td><?php echo $row['Fullname'];?></td>


</tr>
<?php 
$cnt++;
} ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
               
</body>
</html>