<?php 
include 'includes/dbconnect.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
  
    $id=$_POST['Sno'];
    $Files=$_FILES['Files'];
    $filename=$Files['name'];
    $filetmp=$Files['tmp_name'];
    $destination='image/'.$filename;
    move_uploaded_file($filetmp, $destination);

    $result= mysqli_query($conn,"UPDATE `vtypes` SET `File` = '$destination' WHERE `vtypes`.`Sno` = '$id'");
    echo $id;
    echo $destination;
    if($result)
    {
      echo 'done';
    }
    else
    {
      echo mysqli_error($conn);
    }
}
?>

<html>
  <head>
  <title>img</title>
  </head>
  <body>
    <div class="container">
        <h2 align="center">Enter Image</h2><br>
        <form action="example.php" method="post" enctype="multipart/form-data">
          <div class="container">
            <div class="col">
                <input type="Text" class="form-control" name="Sno" id="Sno" placeholder="Enter Sno" required="true">
            </div>
            <div class="col">
                <input type="File" class="form-control" accept=".jpg, .jpeg, .gif, .png" name="Files" id="Files" required="true">
            </div>
          </div>
          <div class="container">
                <button type="submit" class="btn btn-primary">submit</button>
          </div>
        </form>
      </div>
  </body>
</html>