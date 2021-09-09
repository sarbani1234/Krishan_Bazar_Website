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
  <a href="total-regfarmers.php">Total registered farmer</a>
  <a href="total-regvendors.php">Total registered vendor</a>
  <a href="total-regcustomers.php">Total registered customer</a>
  <a href="Product_approve.php">Total products updated</a>
  <a href="../finalpart/admin/waiting.php">Transport waiting list</a>
  <a href="view_CusInvoice.php">Customer Invoice</a>
  <a href="view_VenInvoice.php">Vendor Invoice</a>
  <a href="total-listedproducts.php">total listed products</a>
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