<?php session_start();
if (isset($_SESSION['admin']))
{

$x=$_REQUEST['hidden'];
$a=$_REQUEST['text1'];
$b=$_REQUEST['text2'];
$c=$_REQUEST['text3'];
$d=$_REQUEST['select1'];
$e=$_REQUEST['select2'];


include('../db_connect.php');

$query= "UPDATE user SET fname='$a', lname='$b', ph_no='$c', city='$d',blood_group='$e' where donor_no='$x' ";
if(mysqli_query($con, $query)) {
       header('location:admin1.php');
      
      
}else{

        echo "Error: " .$query . "<br>" . mysqli_error($con);
}

}
else
{
echo "<SCRIPT language='JavaScript'> window.location='admin.php'; </script>";
}
 ?>
