<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['agroaid']==0)) {
  header('location:logout.php');
  } 
else{  

if(isset($_GET['del'])){    
$cmpid=substr(base64_decode($_GET['del']),0,-5);
$query=mysqli_query($con,"delete from tblcategory where ID='$cmpid'");
echo "<script>alert('Category record deleted.');</script>";   
echo "<script>window.location.href='dashboard.php'</script>";
}

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
<li>Oders</a></li>
<li>View</li>
                </ol>
           
 <h4 >View Orders</h4>

 <div id="pdf">
               
<h2> KRISHAN BAZAR </h2>


<?php 

$pmode="Card";
$inid=substr(base64_decode($_GET['invid']),0,-5);
$query=mysqli_query($con,"select distinct Invoice_No,name,email,city,state,zip,mobile_no,address,InvoiceGenDate  from customer_bill  where Invoice_No='$inid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>
<h3>Invoice / Receipt</h3>
<span style="font-size:20px;"><b>Date:  </b><span ><?php echo $row['InvoiceGenDate'];?></span></span><br><br>
<span style="font-size:20px;"><b>Invoice / Receipt #  </b><span><?php echo $row['Invoice_No'];?></span></span><br><br>
<span style="font-size:20px;"><b>Customer#  </b><span><?php echo $row['name'];?></span></span><br><br>
<span style="font-size:20px;"><b>Customer Mobile No #  </b><span><?php echo $row['mobile_no'];?></span></span><br><br>
<span style="font-size:20px;"><b>Email #  </b><span><?php echo $row['email'];?></span></span><br><br>
<span style="font-size:20px;"><b>Address#  </b><span><?php echo $row['address'];?></span></span><br><br>
<span style="font-size:20px;"><b>City#  </b><span><?php echo $row['city'];?></span></span><br><br>
<span style="font-size:20px;"><b>State #  </b><span><?php echo $row['state'];?></span></span><br><br>
<span style="font-size:20px;"><b>Pin Code #  </b><span><?php echo $row['zip'];?></span></span><br><br>
<span style="font-size:20px;"><b>Payment Mode #  </b><span ><?php echo $pmode;?></span></span><br><br><br>

<?php } ?>

<table border="4">
<tbody >
<tr>
<th style="font-size:20px;">#</th>
<th style="font-size:20px;">Category</th>
<th style="font-size:20px;">Product Name</th>
<th style="font-size:20px;">Product Quantity (in Kg/Gram)</th>
<th style="font-size:20px;">Quantity</th>
<th style="font-size:20px;" width="10%">Unit Price</th>
<th style="font-size:20px;" width="10%">Price</th>

</tr>
                                            
                                            </tbody>
<?php 
$query=mysqli_query($con,"SELECT tblproducts.CategoryName,tblproducts.ProductName,tblproducts.ProductQuantity,tblproducts.ProductPrice,customer_bill.Quantity FROM customer_bill JOIN tblproducts ON tblproducts.ID=customer_bill.ProductId WHERE customer_bill.Invoice_No='$inid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{  
$subtotal=($row['Quantity']*$row['ProductPrice']);  
?>  


<tr>
<td style="font-size:20px;"><?php echo $cnt;?></td>
<td style="font-size:20px;"><?php echo $row['CategoryName'];?></td>
<td style="font-size:20px;"><?php echo $row['ProductName'];?></td>
<td style="font-size:20px;"><?php echo $row['ProductQuantity'];?></td>
<td style="font-size:20px;"><?php echo $row['Quantity'];?></td>
<td style="font-size:20px;"><?php echo $row['ProductPrice'];?></td>
<td style="font-size:20px;"><?php echo number_format($subtotal,2);?></td>
</tr> 


<?php
$grandtotal+=$subtotal; 
$cnt++;
} ?>
  <tr>
<th colspan="6" style="text-align:center; font-size:30px;">Total</th> 
<th style="text-align:left; font-size:30px;"><?php echo number_format($grandtotal,2);?></th>   

</tr>                                                                               
                                        </table>
</div>

<button style="text-align:center; font-size:20px;" onclick="printDiv('pdf','Title')">Print</button>
</body>
<script type="text/javascript">
  var doc = new jsPDF();

function printDiv(divId, title) {

  let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

  mywindow.document.write('</head><body >');
  mywindow.document.write(document.getElementById(divId).innerHTML);
  mywindow.document.write('</body></html>');

  mywindow.document.close(); 
  mywindow.focus(); 

  mywindow.print();
  mywindow.close();

  return true;
}

</script>
</html>
 
        
