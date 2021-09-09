<?php
session_start();
include('includes/dbconnection.php');


if (isset($_SESSION["agroaid"])) {

    $name = $_POST["farmername"];
    $catname = $_POST['catname'];
    $prdctname = $_POST['prdctname'];
    $prdctqnty = $_POST['prdctqnty'];
    $prdctprice = $_POST['prdctprice'];

    
    $sql0="SELECT ID from `tblproducts`";
    $runquery=mysqli_query($con,$sql0);
    if (mysqli_num_rows($runquery) == 0) {
        echo( mysqli_error($con));
        $ID=1;
    }else if (mysqli_num_rows($runquery) > 0) {
        $sql2="SELECT MAX(ID) AS max_val from `tblproducts`";
        $runquery1=mysqli_query($con,$sql2);
        $row = mysqli_fetch_array($runquery1);
        $ID= $row["max_val"];
        $ID=$ID+1;
        echo( mysqli_error($con));
    }
   

    $sql =mysqli_query($con, "INSERT INTO `tblproducts` (`ID`, `FarmerName`, `CategoryName`, `ProductName`, `ProductQuantity`, `ProductPrice`) VALUES ('$ID', '$name','$catname','$prdctname','$prdctqnty','$prdctprice')");
     if($sql) {
        echo "<script>alert('The product approve successfully')</script>";
        echo "<script>window.location.href='Product_approve.php'</script>";
         }
     else{
         echo "<script>alert('Something went wrong')</script>";
        echo "<script>window.location.href='view-products-details.php'</script>";
     }
    
    }  

    else{

        echo(mysqli_error($con));
        
    }
?>