<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['agroaid']==0)) {
  header('location:logout.php');
  } else{

?>
<!DOCTYPE html>
<html>
<head>
    <title> Manage Vendor's Invoice </title>

<body>
    

<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
       
                <ol >
<li><a href="#">Vendor's Invoices</a></li>
<li>Manage</li>
                </ol>
           
 <h3>Manage Vendor's Invoices</h3>
                
                                        <table border="4">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Invoice Number</th>
                                                    <th>Vendor Name</th>
                                                    <th>Vendor Contact no.</th>
                                                    <th>Payment Mode</th>
                                                    <th>Invoice Gen. Date</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
<?php 
$paymode="Card";
$rno=mt_rand(10000,99999); 
$query=mysqli_query($con,"select distinct Invoice_No,name,mobile_no,InvoiceGenDate  from vendor_bill");
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>                                                
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['Invoice_No'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['mobile_no'];?></td>
<td><?php echo $paymode;?></td>
<td><?php echo $row['InvoiceGenDate'];?></td>
<td>
<a href="Vendor-Invoice.php?invid=<?php echo base64_encode($row['Invoice_No'].$rno);?>" class="mr-25" data-toggle="tooltip" data-original-title="View Details">View</a>
</td>
</tr>
<?php 
$cnt++;
} ?>
                                                
                                            </tbody>
                                        </table>
  
</body>
</html>
<?php } ?>