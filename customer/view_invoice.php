<?php
session_start();
include('includes/dbconnection.php');
if (strlen($_SESSION['agroctid']==0)) {
  header('location:logout.php');
  } else{  
if(isset($_GET['del'])){    
$cmpid=substr(base64_decode($_GET['del']),0,-5);
$query=mysqli_query($con,"delete from tblcategory where id='$cmpid'");
echo "<script>alert('Category record deleted.');</script>";   
echo "<script>window.location.href='manage-categories.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Invoices</title>
</head>
<body>

<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
                <ol>
<li><a href="#">Invoices</a></li>
<li>Manage</li>
                </ol>
 <h4>Manage Invoices</h4>
               
                                        <table >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Invocie Number</th>
                                                    <th>Name</th>
                                                    <th>Contact no.</th>
                                                    <th>Invoice Gen. Date</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
<?php 
$rno=mt_rand(10000,99999); 
$query=mysqli_query($con,"select distinct Invoice_No,Name,mobile_no,InvoiceGenDate  from customer_bill");
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>                                                
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['Invoice_No'];?></td>
<td><?php echo $row['Name'];?></td>
<td><?php echo $row['mobile_no'];?></td>
<td><?php echo $row['PaymentMode'];?></td>
<td><?php echo $row['InvoiceGenDate'];?></td>
<td>
<a href="invoice.php?invid=<?php echo base64_encode($row['Invoice_No'].$rno);?>">View</a>
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