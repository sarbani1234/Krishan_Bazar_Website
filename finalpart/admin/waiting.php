<?php
$approve=false;
$delete=false;
$n=0;

    include "includes/dbconnect.php";
      if(isset($_GET['delete']))
      {
        $sno=$_GET['delete'];
        $result=mysqli_query($conn,"DELETE FROM `waiting` WHERE `waiting`.`Sno` = '$sno'");
        if($result)
        {
          $delete=true;
        }
      }
       if(isset($_GET['approve']))
      {
        $sno=$_GET['approve'];
        $res=mysqli_query($conn,"SELECT * FROM `waiting` WHERE `waiting`.`Sno` = '$sno' ");
        while ($row=mysqli_fetch_array($res)) 
        { 
        $Id=$row['Id'];
        $Model=$row['Model'];
        $Company=$row['Company'];
        $Description=$row['Description'];
        $type=$row['Type'];
        $file=$row['File'];
        $Email=$row['Email'];
        $vehicle=$row['vehicle'];
        $date=$row['DateTime'];
        }
        $res=mysqli_query($conn,"INSERT INTO `".$vehicle."` (`Id`, `Model`, `Company`, `Description`, `File`,`Type`,`Email`,`DateTime`) VALUES ('$Id', '$Model', '$Company', '$Description', '$file','$type','$Email',current_timestamp())");
        if($res)
        {
          $approve=true;
          $del=mysqli_query($conn,"DELETE FROM `waiting` WHERE `waiting`.`Sno` = '$sno'");
        }
      
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    
    <title>Approval</title>

  </head>
  <body>    
<?php
 include "includes/navbar.php";
    if($approve)
    {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">  
              <strong>Success!</strong> Record inserted sucessfully. 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">  
              <span aria-hidden="true">&times;</span> 
              </button> 
              </div>';
    }
    if($delete)
    {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">  
              <strong>Success!</strong> Entry Deleted. 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">  
              <span aria-hidden="true">&times;</span> 
              </button> 
              </div>';
    }
?>

<div class="container my-4">
	<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Id</th>
      <th scope="col">Model</th>
      <th scope="col">Company</th>
      <th scope="col">Description</th>
      <th scope="col">Design</th>
      <th scope="col">Type</th>
      <th scope="col">DateTime</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  	<?php
	$res=mysqli_query($conn,"SELECT * FROM waiting");
	while ($row=mysqli_fetch_array($res)) 
	{ 
		$n++;
		echo 
		"<tr>
	      <th scope='row'>".$n."</th>
	      <td>".$row['Id']."</td>
	      <td>".$row['Model']."</td>
        <td>".$row['Company']."</td>
        <td>".$row['Description']."</td>
        <td>".$row['Type']."</td>
        <td>".$row['vehicle']."</td>
        <td>".$row['DateTime']."</td>
	      <td><button class='approve btn btn-sm btn-primary' id=".$row['Sno'].">Approve</button>
            <button class='delete btn btn-sm btn-primary' id=d".$row['Sno'].">Delete</button></td>
	    </tr>";
	}
	?>
  </tbody>
</table>
</div>
<hr>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
		    $(document).ready( function () {
		    $('#myTable').DataTable();
			} );
    </script>
    <script>

      deletes=document.getElementsByClassName('delete');
      Array.from(deletes).forEach((element)=>{element.addEventListener("click",(e)=>{
          tr=e.target.parentNode.parentNode;
          sno=e.target.id.substr(1);
          if(confirm("Are you sure?"))
          {
            window.location=`waiting.php?delete=${sno}`;
          }
        })})

      approves=document.getElementsByClassName('approve');
      Array.from(approves).forEach((element)=>{element.addEventListener("click",(e)=>{
          tr=e.target.parentNode.parentNode;
          sno=e.target.id;
          if(confirm("Are you sure?"))
          {
            window.location=`waiting.php?approve=${sno}`;
          }
        })})
    </script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
