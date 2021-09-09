
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location:ownerlogin.php");
  exit();
}

$mail=$_SESSION['Email'];

include 'includes/dbconnect.php';


if(isset($_GET['snoid']))
{
    $sno=$_GET['snoid'];  
   $sql="DELETE FROM `cab` WHERE `cab`.`Sno` = $sno";
    $result=mysqli_query($conn, $sql);
    if($result)
      {
      header("location:card.php?tid=1");
      }
}

$id=$_GET['catid'];
$sql="SELECT * FROM `cab` WHERE Sno=$id";
$result=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result))
{
  $sno=$row['Sno'];
  $cid=$row['Id'];
	$model=$row['Model'];
  $company=$row['Company'];
  $description=$row['Description'];
  $file=$row['File'];
  $nmail=$row['Email'];
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style type="text/css" >
      #ques
      {
        min-height: 450px; 
       }
    </style>

    <title>Vehicle Details</title>
  </head>
  <body>
    <?php include 'includes/navbar.php'; ?>
    <div class="container my-4">
      <div class="row">
        <div class="col" >
          <img src=<?php echo $file ?> height="300px" class="rounded float-start" alt=<?php echo $model?>> 
        </div>
        <div class="col" align="left"><h2><b><?php
            echo $model." ".$company."<br>";?></b></h2>
            <h6>
           <?php
            echo "<h3>Price: <br></h3>";
            echo "<b>Company: </b>". $company."<br>";
            echo "<b>Model name: </b>". $model."<br>";
            echo "<b>Vehicle Id: </b>". $cid."<br>";
            echo "<b>Description: </b>". $description."<br>";

            ?></h6>
             <div class="col">
             <?php 
             if($mail==$nmail)
              {
                echo
             '<a class=" edit btn btn-primary my-3" href="addcab.php?eid='.$sno.'" role="button" >Edit Detail</a>
              <a class=" delete btn btn-primary my-3" href="cabdetails.php?snoid='.$sno.'" role="button" >Delete Detail</a>';
            }
            ?>
           </div> 
        </div>
        
        
      </div>
    </div>
    <hr size="10">
    <div class="container my-2" id="ques">
      <h5><p><u>Additional Details:-</u></p></h5>
    <?php
      echo "Model name: ". $model."<br>";
      echo "Company: ".$company."<br>";
    ?>
  </div>
  <?php
  include 'includes/footer.php';
  ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    

    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>