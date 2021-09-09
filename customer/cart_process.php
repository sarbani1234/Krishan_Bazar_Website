<?php
session_start();
include('includes/dbconnection.php');


if (isset($_SESSION["agroctid"])) {
	?>

	<?php
if(isset($_SESSION["agroctid"])){
$ret=mysqli_query($con,"select FullName from tblcustomer where ID='$_SESSION[agroctid]'");
while($row=mysqli_fetch_array($ret))
{
 $name=$row['FullName'];
 } } ?>

<?php

 $productid=array();      
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["pprice"];
        array_push($productid,$item['code']); ?>

           <input type="hidden" value="<?php echo $item['quantity']; ?>" name="quantity[<?php echo $item['code']; ?>]">


<?php
$cpid=$item["code"];
$pro_name=$item["pname"];
$pro_qnty=$item["pqnty"];
$cat_name=$item["catname"];
$qnty=$item["quantity"];
$unit_price=$item["pprice"];
$total_price=number_format($item_price,2);  


$sql0="SELECT cart_id from `customer_cart`";
    $runquery=mysqli_query($con,$sql0);
    if (mysqli_num_rows($runquery) == 0) {
        echo( mysqli_error($con));
        $cart_id=1;
    }else if (mysqli_num_rows($runquery) > 0) {
        $sql2="SELECT MAX(cart_id) AS max_val from `customer_cart`";
        $runquery1=mysqli_query($con,$sql2);
        $row = mysqli_fetch_array($runquery1);
        $cart_id= $row["max_val"];
        $cart_id=$cart_id+1;
        echo( mysqli_error($con));
    }


$sql=mysqli_query($con,"insert into customer_cart(cart_id,CustomerName,Product_Id,Product_name,Product_quantity,Category,Quantity,Unit_price,Total_price) values('$cart_id ','$name','$cpid','$pro_name','$pro_qnty','$cat_name','$qnty','$unit_price','$total_price')");

if($sql){
echo '<script>alert("Hope you are enjoying! Make sure that KRISHAN BAZAAR never asks for any personal details. Do not click on unknown links received on mobile/email from any fake sites.")</script>';  
 echo "<script>window.location.href='cus_billing.php'</script>";

} else{
    echo '<script>alert("Something went wrong. Please try again!")</script>';  
 echo "<script>window.location.href='my-cart.php'</script>";

}
}  }?>