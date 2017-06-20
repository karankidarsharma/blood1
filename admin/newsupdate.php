<?php
session_start();
if(isset($_SESSION['admin'])){

}else{
	header('location:admin.php?error');
}
$a=$_REQUEST['text'];

include('../db_connect.php');

$query="UPDATE news SET info='$a'where sno= 1 ";
if(mysqli_query($con, $query)) {
       header('location:admin1.php');
      
      
}else{

        echo "Error: " .$query . "<br>" . mysqli_error($con);
}







 ?>



