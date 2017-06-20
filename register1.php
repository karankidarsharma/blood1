<?php session_start();
/*if(!defined('MyConst')) {
   die('<h1>Are you trying to hack ME?????????</h1><br>
   <img src="http://i714.photobucket.com/albums/ww146/rikaci/animasi/hacker.gif" width="100%" height="90%";>
    ');
}*/

$a=$_REQUEST['text1'];
$b=$_REQUEST['text2'];
$c=$_REQUEST['text3'];
$d=$_REQUEST['select1'];
$e=$_REQUEST['select2'];
$f=$_REQUEST['email'];
$g=$_REQUEST['password'];

include('db_connect.php');
if (!$con)
{
	die('could not connect: ' .mysqli_error());
}
  
 $query = "SELECT email FROM user WHERE email='$f'";

$result=mysqli_query($con, $query);

  while($row=mysqli_fetch_assoc($result))
  {
      $em=$row['email'];
  }
 if($em == $f)
{
	header('location:register.php?success=error existing user');
}




else{


$query="INSERT INTO user( fname, lname, ph_no, city, blood_group, email, password) VALUES ('$a','$b','$c','$d','$e','$f','$g')";

if(mysqli_query($con, $query)) {
       header('location:register.php?success=record/created successfully');
      
}else{

        echo "Error: " .$query . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
?>