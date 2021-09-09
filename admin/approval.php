<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<?php 
	include_once('includes/navbar.php');
	include_once('includes/sidebar.php');
	?>
	<form method="POST">
	 <table> 
                                            
		<tr>
			<th>#</th>
			<th>Category</th>
			<th>Product Name</th>
			<th>Product Quantity</th>
			<th>Pricing/Kg</th>
			<th>Posting Date</th>
			<th>Product By</th>
			<th>action</th>
		</tr>
		<?php
$rno=mt_rand(10000,99999);  
$query=mysqli_query($con,"SELECT * FROM `adaprv`");
$cnt=1;
while($row=mysqli_fetch_array($query))
{  
?>                                                
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['Categoryname'];?></td>
<td><?php echo $row['Productname'];?></td>
<td><?php echo $row['Productquantity'];?></td>
<td><?php echo $row['Productprice'];?></td>
<td><?php echo $row['Postingdate'];?></td>
<td><?php echo $row['Fullname'];?></td>
<td><input type="submit" name="approve"></td>
</tr>
<?php 
$cnt++;
} ?>
<?php
if(isset($_POST['approve']))
{
$query=mysqli_query($con,"SELECT * FROM `adaprv`");
while($row=mysqli_fetch_array($query)){
$catname=$row['Categoryname'];  
$pname=$row['Productname'];
$pqnty=$row['Productquantity'];
$pprice=$row['Productprice'];
$name=$row['FullName'];
	$query=mysqli_query($con,"insert into tblproducts(CategoryName,ProductName,ProductQuantity,ProductPrice) values('$catname','$pname','$pqnty','$pprice')"); 
if($query){
echo "<script>alert('Product added successfully.');</script>";   
echo "<script>window.location.href='add-product.php'</script>";
} else{
echo "<script>alert('Something went wrong. Please try again.');</script>";   
echo "<script>window.location.href='add-product.php'</script>";    
}
}
}
?>
</table>
</form>
</html>