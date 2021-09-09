<?php 
session_start();
/*if(!isset($_SESSION['aloggedin']) || $_SESSION['aloggedin']!=true)
{
  header("location:adminlogin.php");
  exit();
}*/
          include 'includes/dbconnect.php';
          $id=$_GET['tid'];
          ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Vehicle List</title>
  </head>
  <body>
    <?php
    include 'includes/navbar.php';
    echo '
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="staticimage/cover5.jpg"  class="d-block w-100" alt="wait" height="550">
    </div>
    <div class="carousel-item">
      <img src="staticimage/cover4.jpg"  class="d-block w-100" alt="wait" height="550">
    </div>
    <div class="carousel-item">
      <img src="staticimage/cover3.jpeg"  class="d-block w-100" alt="wait" height="550">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>';
    ?>
    <!-- <h2 class="text-center mt-4 ">Vehicle Lists</h2> -->
    <div class="container my-3" align="center">
      <h2>Browse Vehicles</h2>
            <div class="row">
                
              <?php
              if($id==1)
              {    
                echo'<a class="btn btn-primary my-3" href="addcab.php" role="button" >+ Add New Entry</a>';
                  $sql="SELECT * FROM `cab`";
                  $result=mysqli_query($conn, $sql);
                  while($row=mysqli_fetch_assoc($result))
                  {
                    $sno=$row['Sno'];
                    $id=$row['Id'];
                    $model=$row['Model'];
                    $description=$row['Description'];
                    $company=$row['Company'];
                    $file=$row['File'];
            echo ' <div class="col-md-3 my-2" align="left">
                        <div class="card" style="width: 18rem; height: 23rem;">
                          <img src="'.$file.'" height="200px" class="card-img-top" alt='.$model.'>
                            <div class="card-body">
                              <h5 class="card-title"><a href="cabdetails.php?catid='.$sno.'">'.$model.'</a></h5>
                              <p class="card-text"><b>Description: </b>'.substr($description,0,20).'...</p>
                              <a href="cabdetails.php?catid='.$sno.'" class="btn btn-primary ">See More</a>
                            </div>
                        </div>
                    </div>';
          }
        }
        if($id==2)
              {    
                echo'<a class="btn btn-primary my-3" href="addtrailer.php" role="button" >+ Add New Entry</a>';
                   
                  $sql="SELECT * FROM `trailer`";
                  $result=mysqli_query($conn, $sql);
                  while($row=mysqli_fetch_assoc($result))
                  {
                    $sno=$row['Sno'];
                    $id=$row['Id'];
                    $model=$row['Model'];
                    $description=$row['Description'];
                    $company=$row['Company'];
                    $file=$row['File'];
            echo ' <div class="col-md-3 my-2" align="left">
                          <div class="card" style="width: 18rem;">
                          <img src="'.$file.'" height="200px" class="card-img-top" alt='.$model.'>
                            <div class="card-body">
                              <h5 class="card-title"><a href="trailerdetails.php?catid='.$sno.'">'.$model.'</a></h5>
                              <p class="card-text"><b>Description: </b>'.substr($description,0,20).'...</p>
                              <a href="trailerdetails.php?catid='.$sno.'" class="btn btn-primary">See More</a>
                            </div>
                          </div>
                        </div>';
          }
        }
        if($id==3)
              {    
                echo'<a class="btn btn-primary my-3" href="addtrailercab.php" role="button" >+ Add New Entry</a>';
                    
                  $sql="SELECT * FROM `trailercab`";
                  $result=mysqli_query($conn, $sql);
                  while($row=mysqli_fetch_assoc($result))
                  {
                    $sno=$row['Sno'];
                    $id=$row['Id'];
                    $model=$row['Model'];
                    $description=$row['Description'];
                    $company=$row['Company'];
                    $file=$row['File'];
            echo ' <div class="col-md-3 my-2" align="left">
                          <div class="card" style="width: 18rem;">
                          <img src="'.$file.'" height="200px" class="card-img-top" alt='.$model.'>
                            <div class="card-body">
                              <h5 class="card-title"><a href="trailercabdetails.php?catid='.$sno.'">'.$model.'</a></h5>
                              <p class="card-text"><b>Description: </b>'.substr($description,0,20).'...</p>
                              <a href="trailercabdetails.php?catid='.$sno.'" class="btn btn-primary">See More</a>
                            </div>
                          </div>
                        </div>';
          }
        }
        if($id==4)
              {    
                echo'<a class="btn btn-primary my-3" href="addtipper.php" role="button" >+ Add New Entry</a>';
                  $sql="SELECT * FROM `tipper`";
                  $result=mysqli_query($conn, $sql);
                  while($row=mysqli_fetch_assoc($result))
                  {
                    $sno=$row['Sno'];
                    $id=$row['Id'];
                    $model=$row['Model'];
                    $description=$row['Description'];
                    $company=$row['Company'];
                    $file=$row['File'];
            echo ' <div class="col-md-3 my-2" align="left">
                          <div class="card" style="width: 18rem;">
                          <img src="'.$file.'" height="200px" class="card-img-top" alt='.$model.'>
                            <div class="card-body">
                              <h5 class="card-title"><a href="tipperdetails.php?catid='.$sno.'">'.$model.'</a></h5>
                              <p class="card-text"><b>Description: </b>'.substr($description,0,20).'...</p>
                              <a href="tipperdetails.php?catid='.$sno.'" class="btn btn-primary">See More</a>
                            </div>
                          </div>
                        </div>';
          }
        }

    ?>
</div>
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