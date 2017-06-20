<?php 

if(!defined('MyConst')) {
   die('<h1>Are you trying to hack ME?????????</h1><br>
   <img src="http://i714.photobucket.com/albums/ww146/rikaci/animasi/hacker.gif" width="100%" height="90%";>
   	');
}

$u=$_REQUEST['text'];
$p=$_REQUEST['password'];
if($u== "" || $p==""){

	header('location:profile.php');
}

include('db_connect.php');
if (!$con)
{
	die('could not connect: ' .mysqli_error());
}

$query="SELECT * FROM user WHERE email='" .$u ."'";

$result=mysqli_query($con, $query);
while($row = mysqli_fetch_assoc($result))

{
 $dbp=$row["pass_word"];
 }
 if ($dbp==$p)
 {
 $_SESSION['suser']=$u;
 
 header('location:profile1.php?success=sccessfully connected');
 }
 else
{
	header('location:profile.php?success=denied/Error connection');
}

?>


