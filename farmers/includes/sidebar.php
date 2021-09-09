       
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="sidenav.css">
</head>
<body>
     <!--side nav starts-->
  <div class="navbar">
        
        <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="add-category.php">Add catagory</a>
  <a href="manage-categories.php">Manage catagories</a>
  <a href="add-product.php">Add product</a>
  <a href="manage-products.php">Manage product</a>
</div>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   <div>     
<span class="a" style="position: absolute;top: 120px;color: white;font-size:30px;cursor:pointer;"
onclick="openNav()">&#9776; open</span> </div>
</body>
</html>
                          


                      
                      
                      
     