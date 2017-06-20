
<html>
<div style="background-color:grey; width:100%; height:100%;">
<table>
<?php 
$a=$_REQUEST['select1'];
$b=$_REQUEST['select2'];
if($a=="" || $b==""){
	header('location:index.php');
}
include('db_connect.php');

$query="SELECT * FROM user WHERE city='$a' AND blood_group='$b'";
//$query="SELECT *  FROM user ";
$n=0;
$result=mysqli_query($con, $query);
while($row = mysqli_fetch_assoc($result)){
if($n%4==0){

	echo "<tr>";
}
$d=$row['donor_no'];
$e=$row['fname'];
$f=$row['blood_group'];
$g=$row['city'];


echo"<td style='width: 20%;color:#990000;border:2px solid #990000;text-align:center;' >
<strong></br>Donor No:$d  </br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img src='image/$f.jpg' alt=' NO IMAGE' width='250' height='250' align='middle' >
</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspName:$e </br>

</br>&nbsp&nbsp&nbspCity:$g </br></strong>

</td>&nbsp";
$n++;
echo"";
}
   mysqli_close($con);  
        
?>
</tr></br></table>
</div>

</html>