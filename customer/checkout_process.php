<?php
session_start();
include('includes/dbconnection.php');

defined('SALT') ? null : define('SALT','xxxxxxxxxxxxxxx');

if (isset($_SESSION["agroctid"])) {

    $invoiceno= mt_rand(100000000, 999999999); 
    $name = $_POST["firstname"];
    $email = $_POST['email'];
    $mobilenumber = $_POST['mobile_no'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip= $_POST['zip'];
    $cardname= $_POST['cardname'];
    $cardnumber= $_POST['cardNumber'];
    $expdate= $_POST['expdate'];
    $cvv= $_POST['cvv'];
    $user_id=$_SESSION["agroctid"];
    $cardnumberstr=(string)$cardnumber;


 $productid=array();      
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["pprice"];
        array_push($productid,$item['code']); ?>

           <input type="hidden" value="<?php echo $item['quantity']; ?>" name="quantity[<?php echo $item['code']; ?>]">
    <?php
    $cpid=$item["code"];
    $qnty=$item["quantity"]; 
    
    $sql0="SELECT order_id from `customer_bill`";
    $runquery=mysqli_query($con,$sql0);
    if (mysqli_num_rows($runquery) == 0) {
        echo( mysqli_error($con));
        $order_id=1;
    }else if (mysqli_num_rows($runquery) > 0) {
        $sql2="SELECT MAX(order_id) AS max_val from `customer_bill`";
        $runquery1=mysqli_query($con,$sql2);
        $row = mysqli_fetch_array($runquery1);
        $order_id= $row["max_val"];
        $order_id=$order_id+1;
        echo( mysqli_error($con));
    }
   

    $sql =mysqli_query($con, "INSERT INTO `customer_bill` (`Invoice_No`,`order_id`,`customer_id`,`ProductId`,`Quantity`,`name`,`email`,`mobile_no`,`address`,`city`, `state`, `zip`, `cardname`,`cardnumber`,`expdate`,`cvv`) VALUES ('".$invoiceno."',$order_id, '$user_id','$cpid','$qnty','$name','$email','$mobilenumber','$address','$city', '$state', '$zip', AES_ENCRYPT('$cardname','".SALT."'),AES_ENCRYPT('$cardnumberstr','".SALT."'),AES_ENCRYPT('$expdate','".SALT."'),AES_ENCRYPT('$cvv','".SALT."'))");
     if($sql) {
        echo "<script>alert('Your order placed successfully')</script>";
        unset($_SESSION["cart_item"]);
        $_SESSION['invoice']=$invoiceno;
        echo "<script>window.location.href='invoice.php'</script>";
     }
     else{
         echo "<script>alert('Unable to placed your order')</script>";
        echo "<script>window.location.href='cus_billing.php'</script>";
     }
    
    }  
}

    else{

        echo(mysqli_error($con));
        
    }
?>