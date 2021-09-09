<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  /*header("location:ownerlogin.php");
  exit();*/
}
          include 'includes/dbconnect.php';
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
      <img src="staticimage/cover3.jpeg"  class="d-block w-100" alt="wait" height="550">
      <div class="carousel-caption d-none d-md-block">
    <h1>TRANSPORTATION SERVICES</h1>
    <p>provided by Krishan Bazar Website</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="staticimage/cover4.jpg"  class="d-block w-100" alt="wait" height="550">
      <div class="carousel-caption d-none d-md-block">
    <h1>KRISHAN BAZAR WEBSITE</h1>
    <p>provides transporation service</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="staticimage/cover1.jpg"  class="d-block w-100" alt="wait" height="550">
      <div class="carousel-caption d-none d-md-block">
    <h1>GET PRODUCT AT YOUR DOORSTEP</h1>
    <p>By Krishan Bazar Transportation Service</p>
  </div>
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
    <div class="container my-4" align="center">
      <h2>Browse Vehicles by Categories</h2>
            <div class="row">  
              <?php          
          $sql="SELECT * FROM `vtypes`";
          $result=mysqli_query($conn, $sql);
          while($row=mysqli_fetch_assoc($result))
          {
            $sno=$row['Sno'];
            $type=$row['Type'];
            $file=$row['File'];
            echo ' <div class="col-md-3 my-3" align="left">
                          <div class="card" style="width: 18rem;">
                          <img src="'.$file.'" height="200px" class="card-img-top" alt='.$type.'>
                            <div class="card-body">
                              <h5 class="card-title"><a href="card.php?tid='.$sno.'">'.$type.'</a></h5>
                              <p class="card-text"><b>Description: </b>'.substr($type,0,20).'</p>
                              <a href="card.php?tid='.$sno.'" class="btn btn-primary">See More</a>
                            </div>
                          </div>
                        </div>';
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