  <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['agroctid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["cart_item"] as $keys => $values)
        {
            if($values["code"] == $_GET["ID"])
            {
                unset($_SESSION["cart_item"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="my-cart.php"</script>';
            }
        }
    }
}
   if(isset($_GET["action"]))
{
    if($_GET["action"] == "empty")
    {
        unset($_SESSION["cart_item"]);
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
</head>
<body>

    <?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
       
<li class="breadcrumb-item active" aria-current="page">My Cart</li>
               


                        


<form class="needs-validation" action="cart_process.php" method="post" novalidate>                       
<h4>Shopping Cart</h4>
<hr />

<a id="btnEmpty" href="my-cart.php?action=empty" >Empty Cart</a> <br> <br>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>  

<label for="validationCustom03">Your name</label>
<?php
if(isset($_SESSION["agroctid"])){
$ret=mysqli_query($con,"select FullName from tblcustomer where ID='$_SESSION[agroctid]'");
while($row=mysqli_fetch_array($ret))
{?>
<input type="text" class="form-control" id="validationCustom03" placeholder="Your name" name="customername" value="<?php echo $row['FullName'];?>" required autocomplete="off">
<?php } } ?> <br> <br>

  <table border="1">
<tbody>
<tr>
<th >Product ID</th>
<th >Product Name</th>
<th>Product Quantity</th>
<th>Category</th>
<th width="5%">Quantity</th>
<th width="10%">Unit Price /Kg</th>
<th width="10%">Total Price</th>
<th width="5%">Remove</th>
</tr>   
<?php 


 $productid=array();      
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["pprice"];
        array_push($productid,$item['code']);

        ?>
           <input type="hidden" value="<?php echo $item['quantity']; ?>" name="quantity[<?php echo $item['code']; ?>]">
                <tr>
                <td><?php echo $item["code"]; ?></td>
                <td><?php echo $item["pname"]; ?></td>
                <td><?php echo $item["pqnty"]; ?></td>
                <td><?php echo $item["catname"]; ?></td>
                <td><?php echo $item["quantity"]; ?></td>
                <td><?php echo $item["pprice"]; ?></td>
                <td><?php echo number_format($item_price,2); ?></td>
                <td><a href="my-cart.php?action=delete&ID=<?php echo $values["code"]; ?>">Remove</a></td>
                </tr>
                <?php
                $total_quantity += $item["quantity"];
                $total_price += ($item["pprice"]*$item["quantity"]);
        }
        $_SESSION['productid']=$productid;
        ?>

<tr>
<td colspan="4" align="right">Grand Total:</td>
<td colspan="2"><?php echo $total_quantity; ?></td>
<td colspan="1"><strong><?php echo number_format($total_price,2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table> 

<button type="submit" name="update">BUY NOW</button>
</form>
    


  <?php
} else {
?>
<div style="color:red" align="center">Your Cart is Empty</div> 
<?php }?> 

</div>
</div></div></section>


</body>
</html>
<?php } ?>