<?php session_start();
$u=$_REQUEST['text'];
$p=$_REQUEST['password'];

include('../db_connect.php');
if (!$con)
{
	die('could not connect: ' .mysqli_error());
}

$query="SELECT * FROM admin WHERE user_name='" .$u ."'";

$result=mysqli_query($con, $query);
while($row = mysqli_fetch_assoc($result))

{
 $dbp=$row["pass_word"];
 }
 if ($dbp==$p)
 {
 $_SESSION['admin']=$u;
 
 header('location:admin1.php?success=sccessfully connected');
 }
 else
{
	header('location:admin.php?success=denied/Error connection');
}
mysqli_close($con);
?>