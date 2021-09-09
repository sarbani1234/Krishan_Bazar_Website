  <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

  ?>

<!DOCTYPE html>
<html>
<head>
    <title>Billing Page</title>
</head>
<body>
    
   
	
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
     
                <ol>
<li><a href="#">View</a></li>
<li>Billing Address and Payment Section</li>
                </ol>
           
 <h2>Billing Address and Payment Section</h2>
               

		<?php
		if(isset($_SESSION["agroctid"])){
			$sql = "SELECT * FROM tblcustomer WHERE ID='$_SESSION[agroctid]'";
			$query = mysqli_query($con,$sql);
			$row=mysqli_fetch_array($query);
		
		echo'
			
				<form id="checkout_form" action="checkout_process.php" method="POST" class="was-validated">

					
						<h3>Billing Address</h3>
						<label >Full Name</label>
						<input type="text" id="fname" class="form-control" name="firstname" pattern="^[a-zA-Z ]+$"  value="'.$row["FullName"].'"><br> <br>
						<label> Email</label>
						<input type="text" id="email" name="email" class="form-control" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$" value="'.$row["Email"].'" required><br> <br>

						<label> Address</label>
						<input type="text" id="adr" name="address" class="form-control" value="'.$row["Address"].'" required><br> <br>

						<label> City</label>
						<input type="text" id="city" name="city" class="form-control" value="'.$row["City"].'" pattern="^[a-zA-Z ]+$" required><br> <br>

						  <label>Mobile Number</label>
                                    <input type="text" id="mobilenumber" name="mobile_no" class="form-control" pattern="[789][0-9]{9}" value="'.$row["MobileNumber"].'" required> <br> <br>

							<label>State</label>
							<input type="text" id="state" name="state" class="form-control" value="'.$row["State"].'"  pattern="^[a-zA-Z ]+$" required><br> <br>

					
							<label>Zip</label>
							<input type="text" id="zip" name="zip" class="form-control" value="'.$row["Pincode"].'"  pattern="^[0-9]{6}(?:-[0-9]{4})?$" required><br> <br>

						
					
					
						<h3>Payment</h3>

						<label for="fname">Accepted Cards</label>
						<div class="icon-container">
						<i class="fa fa-cc-visa" style="color:navy;"></i>
						<i class="fa fa-cc-amex" style="color:blue;"></i>
						<i class="fa fa-cc-mastercard" style="color:red;"></i>
						<i class="fa fa-cc-discover" style="color:orange;"></i>
						</div><br> <br>

						
						
						<label for="cname">Name on Card</label>
						<input type="text" id="cname" name="cardname" class="form-control" pattern="^[a-zA-Z ]+$" required><br> <br>

						
						
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" pattern="^(?:4[0-9]{12}(?:[0-9]{3})?)$" name="cardNumber" required><br> <br>

                  
						<label for="expdate">Exp Date</label>
						<input type="text" id="expdate" name="expdate" class="form-control" pattern="^((0[1-9])|(1[0-2]))\/(\d{2})$" required><br> <br>

						

						
								<label for="cvv">CVV</label>
								<input type="text" class="form-control" pattern="^[0-9]{4}(?:-[0-9]{3})?$" name="cvv" id="cvv" required><br> <br>

					
					<label><input type="CHECKBOX" name="q" class="roomselect" value="conform" required> Shipping address same as billing
					</label><br> <br>';

			
				echo'
					
					<input type="submit" id="submit"  name="submit" value="Continue to checkout" class="checkout-btn">
				</form>
			
			';
		}else{
			echo"<script>window.location.href = 'invoice.php'</script>";
		}
		?>

			<?php


if(isset($_SESSION["cart_item"])){
  $i=1;
    $total_quantity = 0;
    $total_price = 0;
?>  

<h3>My Cart</h3>


  <table border="1">
<tbody>
<tr>
<th>SL No</th>
<th>Product Name</th>
<th>Quantity</th>
<th>Total Price</th>
</tr>   
<?php 


 $productid=array();      
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["pprice"];
        array_push($productid,$item['code']);

        ?>
           <input type="hidden" value="<?php echo $item['quantity']; ?>" name="quantity[<?php echo $item['code']; ?>]">
                <tr>
                <td><?php echo $i; ?></td>  
                <td><?php echo $item["pname"]; ?></td>
                <td><?php echo $item["quantity"]; ?></td>
                <td><?php echo number_format($item_price,2); ?></td> 
                </tr>
                <?php
                $total_quantity += $item["quantity"];
                $total_price += ($item["pprice"]*$item["quantity"]);
                $i++;
        }
        $_SESSION['productid']=$productid;
        ?>

<tr>
<td colspan="2" align="right">Grand Total:</td>
<td><?php echo $total_quantity; ?></td>
<td><strong><?php echo number_format($total_price, 2); ?></strong></td>
</tr>
</tbody>
</table> <?php } ?>
</body>
</html>
