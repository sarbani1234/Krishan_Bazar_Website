<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');




if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select ID from  tbladmin where UserName='$username' and Password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_fetch_array($query);
		if($row >0){
			echo "Login Successfull";
			$_SESSION['agroaid'] = $row['ID'];
			header('location:dashboard.php');
		}else{
			echo "Invalid Username and Password";
			header('location:login.php');
		}

}


?>