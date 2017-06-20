<?php session_start();
 if(isset($_SESSION['admin'])){

 }else{
 	header('location:admin.php?success=error');
 	 }
 	 $a=$_REQUEST['text'];

 	 include('../db_connect.php');

 	 $query="DELETE FROM user where email='$a'";

 	if(mysqli_query($con, $query))
 	{

 	 	header('location:delete.php?succes=deleted successfully');
 	 }else{

 	 	header('location:delete.php?success=error occurred');
 	 }
 	 ?>