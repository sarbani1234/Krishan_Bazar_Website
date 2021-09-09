<?php 
$insertalert=false;
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location:ownerlogin.php");
  exit();
}


include 'includes/dbconnect.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(isset($_POST['snoEdit']))
        {
          $sid=$_GET['sno'];
          $Id=$_POST['IdEdit'];
          $Model=$_POST['ModelEdit'];
          $Description=$_POST['DescriptionEdit'];
          $Company=$_POST['CompanyEdit'];
          $result=mysqli_query($conn,"UPDATE `cab` SET `Id`='$Id', `Model`='$Model', `Company` = '$Company', `Description` = '$Description' WHERE `cab`.`Sno` = '$sid'");
          if($result)
          {
            header("location:card.php?tid=1");
          }
      }
    else
    {
    $Files=$_FILES['Files'];
    $Model=$_POST['Model'];
    $Id=$_POST['Id'];
    $Email=$_POST['Email'];
    $Description=$_POST['Description'];
    $Company=$_POST['Company'];
    $type=$_POST['category'];
    $filename=$Files['name'];
    $filetmp=$Files['tmp_name'];
    $destination='../image/'.$filename;
    move_uploaded_file($filetmp, $destination);
    if($type=="type1")
    {
      $new=true;
    }

       
    $result= mysqli_query($conn,"INSERT INTO `waiting` (`Id`, `Model`, `Company`, `Description`, `File`, `Type`, `vehicle`, `Email`, `DateTime`) VALUES ('$Id', '$Model', '$Company', '$Description', '$destination', '$type', 'cab', '$Email', current_timestamp())");
          if($result)
          {
           $insertalert=true;
          }
          else
          {
            echo "insertion failed".mysqli_error($conn);
          }
        }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- 
      this is for fetching the value of dropdown on-click
    <script>

      $(function()
        {
          $("#tselect").change(function(){
            var display=$("#tselect option:selected").image();
            $("#textresult").val(display);
          })
        })
    </script> -->

    <title>Sign Up</title>
  </head>
  <body>
  	<?php
  	include 'includes/navbar.php';

  	if($insertalert)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Details added successfully, Please wait for approval.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

  	?>
    <?php
    if(isset($_GET['eid']))
    {
      $sid=$_GET['eid'];
      $sql="SELECT * FROM `cab` WHERE Sno=$sid";
$result=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result))
{
  $cid=$row['Id'];
  $model=$row['Model'];
  $company=$row['Company'];
  $description=$row['Description'];
  $nmail=$row['Email'];
}
      echo
    '
    <h2 class="container mt-4" align="center">Edit Vehicle Details</h2><br>
    <form action="addcab.php?sno='.$sid.'" method="post" enctype="multipart/form-data">
      <input type="hidden" name="snoEdit" id="snoEdit">
          <div class="container">
          <div class="container row my-3">
              <div class="col">
                <input type="Text" class="form-control" name="IdEdit" id="IdEdit" placeholder="'.$cid.'" required="true">
              </div>
              </div>
            <div class="container row my-3">
              <div class="col">
                <input type="Text" class="form-control" name="ModelEdit" id="ModelEdit" placeholder="'.$model.'" required="true">
              </div>
              <div class="col">
                <input type="Text" class="form-control" name="CompanyEdit" id="CompanyEdit" placeholder="'.$company.'" required="true">
              </div>
            </div>
            <div class="container row my-4">
              <div class="form-group">
          <textarea class="form-control" id="DescriptionEdit" placeholder="'.$description.'" name="DescriptionEdit" rows="3"></textarea>
        </div>
            </div>
            <div class="container row my-4">
              <div class="col">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn btn-primary">Reset</button>
              </div>
            </div>
          </div>
    </form>';
}
else
{
  echo '
  <div class="container mt-3">
        <h2 align="center">Enter Vehicle Details</h2><br>
        <form action="addcab.php" method="post" enctype="multipart/form-data">
          <div class="container">
            <div class="container row my-4">
            	<div class="col">
                <input type="Text" class="form-control" name="Id" id="Id" placeholder="Enter Vehicle Id" required="true">
              </div>
              <div class="col">
                <input type="Text" class="form-control" name="Model" id="Model" placeholder="Enter Model Name" required="true">
              </div>
              <div class="col">
                <input type="Text" class="form-control" name="Company" id="Company" placeholder="Enter Company Name" required="true">
              </div>
            </div>
            <div class="container row my-4">
            <div class="col">
            <div class="form-group">
          <input type="email" class="form-control" name="Email" id="Email" placeholder="Enter Your Email " required="true">
        </div>
        </div>
              <div class="col">
                <font color="grey" >DesignType: &nbsp &nbsp</font>
                    <select name="category" id="tselect" class="btn-lg">
                    <option selected disabled>----------------select------------------
                    <option value="type1">type 1
                    <option value="type2">type 2
                    <option value="type3">type 3
                    <option value="type4">type 4
                    <option value="type5">type 5
                    </select>
              </div>
              
            </div>
            <div class="container row my-4">
            <div class="col">
            <div class="form-group">
			    <textarea class="form-control" id="Description" placeholder="Description" name="Description" rows="3"></textarea>
			  </div>
        </div>
        </div>
            
            <div class="container row my-4">
              <div class="col">
                <input type="File" class="form-control" accept=".jpg, .jpeg, .gif, .png" name="Files" id="Files" required="true">
              </div>
            </div>
            <div class="container row my-4">
              <div class="col">
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="reset" class="btn btn-primary">Reset</button>
              </div>
            </div>
          </div>
    </form>
</div>';}
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
 <!-- <div>
          <input type="text" readonly="readonly" id="textresult">
          </div> -->