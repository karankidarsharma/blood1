<?php session_start();
if(isset($_SESSION['admin'])){


}else{

  header('location:admin.php');
}
$u=$_REQUEST['text'];
if($u==""){
  header('locatio:admin.php');
}

include('../db_connect.php');
if (!$con)
{
  die('could not connect: ' .mysqli_error());
}

$query="SELECT * FROM user WHERE email='" .$u ."'";

$result=mysqli_query($con, $query);
while($row = mysqli_fetch_assoc($result))

{
  $dn=$row["donor_no"];
 $dbp=$row["password"];
 $n=$row["fname"];
 $l=$row["lname"];
 $ph=$row["ph_no"];
 $c=$row["city"];
 $ss=$row["blood_group"];
 $e=$row["email"];
 }

mysqli_close($con)
?>



<html>
<title>blood</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<head>
  <style>
/* Center the loader */
#loader1 {
  
  width: 400px;
  color: #a01310;
   position: absolute;
   margin-left: 230px;
   margin-top: 245px;
   

}
#loader {
  position: absolute;
  left: 60%;
  top: 50%;
  background-image: url('image/1.gif');
  z-index: 1;
  width: 350px;
  height: 350px;
  margin: -75px 0 0 -75px;
  border: 30px solid #a01310;
  border-radius: 50%;
  border-top: 30px solid grey;
  border-bottom: 30px solid grey;
  width: 220px;
  height: 220px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  70% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: left;
}
</style>
 <script>
function validateForm(){

var x = document.forms["form1"]["text1"].value;
var y = document.forms["form1"]["text2"].value;
var z = document.forms["form1"]["text3"].value;
var a = document.forms["form1"]["select2"].value;
var b = document.forms["form1"]["email"].value;
var d = document.forms["form1"]["select1"].value;

if(x == ""){
    document.getElementById("e1").innerHTML = "Please Enter First Name*"
    return false;
  } else {

      document.getElementById("e1").innerHTML = ""  
      
  }
  if(y == ""){

    document.getElementById("e2").innerHTML = "Please Enter Last Name*"
    return false;
  } else {

      document.getElementById("e2").innerHTML = ""  
      
  }

     var emailPat = /^[0-9]{7,10}$/;
     var emailid=document.getElementById("text3").value;
     var matchArray = emailid.match(emailPat);
     if (matchArray == null){

    document.getElementById("e3").innerHTML = "Wrong/Invalid Phone Number*"
    return false;
  } else {

      document.getElementById("e3").innerHTML = ""  
      
  }  if(d == "Choose a City"){

  document.getElementById("sError").innerHTML = "please choose a city!";
  return false;
} else {

  document.getElementById("sError").innerHTML = "";
  
}  if(a == "Choose a group"){

    document.getElementById("e4").innerHTML = "Please Chose A Blood Group*"
    return false;
  } else  {

      document.getElementById("e4").innerHTML = ""  
      
  } if(b == ""){

    document.getElementById("e5").innerHTML = "Please Enter An Email*";
    return false;
  }else {

      document.getElementById("e5").innerHTML = ""  
      
  }
    


}



</script>

 
  
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="bootstrap/js/jquery.min.js" rel="stylesheet" type="text/css">
  <link href="bootstrap/css/js/bootstrap.min.js" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="div.css">
  

</head>




<body onload="myFunction()" style="margin:0;">
<div id="loader1"><h1 style=" font-size:50px; text-align: center;"> </br><b> Processing</b><img src="image/2.gif"></br> </h1></div>
<div id="loader"><h1 style="color:grey; font-size:30px; text-align: center;"> </h1></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
 <nav class="navbar navbar-inverse nav1">
  <div class="container-fluid">
    
     
  </div>
</nav>
<header class="jumbotron header h1" style="border 1px;">
</br>

</header>
<body>
<div class="container">
<div style="color:#990000; text-align:center; margin:auto; border:1px dashed; width:405px; float:centre; border-radius:3px;">


<form id="form1" onsubmit="return validateForm()"  action="update2.php" method="post" class="form-horizontal" onsubmit="javascript:return validate ();">
  <h1 style="text-align:center;"> <strong>Edit Profile</strong></h1>
</br>
</br>
  
    <input type="hidden" name="hidden" value="<?php echo $dn ?> ">
  
   &nbsp&nbsp  <label >*First Name:</label>
    <input type="text" id="text1" name="text1" value="<?php echo $n ?>">
  <p id="e1"></p>
   </br>
   &nbsp&nbsp&nbsp<label >*Last Name:</label>
    <input type="text" id="text2" name="text2" value="<?php echo $l ?>">
  <p id="e2"></p>
   </br>
  &nbsp&nbsp&nbsp&nbsp  <label >*Phone No:</label>
    <input type="text" id="text3" name="text3" value="<?php echo $ph ?>">
  <p id="e3"></p>
   </br>
   &nbsp&nbsp&nbsp<label for="select1">Choose city:</label>
   <select name="select1" class="select" id="select1">
               <option value="<?php echo $c ?>"><?php echo $c ?></option>         
              <option value="Christchurch">Auckland, North</option>
              <option value="Hamilton">Waikato, Turanga</option>
              <option value="Cambridge">Palmerston, Tauranga</option>
              <option value="Rotorua">Hawke's Bay</option>
              <option value="Auckland">Cantebury, Nelason</option>
              <option value="Wellington">Wellington</option>
              <option value="Wellington">Otago,Southland</option>
            </select>
            <p id="sError" ></p>
          </br>
   &nbsp&nbsp&nbsp<label for="select2">blood group:</label>
    <select name="select2" class="select" id="select2" >
              <option value="<?php echo $ss ?>"><?php echo $ss ?></option>
              <option value="a">A</option>
              <option value="a+ve">A+ve</option>
              <option value="a-ve">B-ve</option>
              <option value="b">B</option>
              <option value="b+ve">B+ve</option>
              <option value="b-ve">B-ve</option>
              <option value="ab">AB</option>
              <option value="ab+ve">AB+ve</option>
              <option value="o">O</option>
              <option value="o+ve">O+ve</option>
              <option value="o-ve">O-ve</option>
              <option value="ab-ve">AB-ve</option>
              </select></li>
           <p id="e4"></p>
            </br>
     
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label >*Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $e ?>" disabled>
 <p id="e5"></p>
  </br>
  

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="submit" class="btn btn-danger btn-lg"  name="submit2">Update&nbsp<span class="glyphicon glyphicon-update"></span></button>
</ul>
</form>


</div>
  </body>
</br>
  </div>
</html>
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
   document.getElementById("loader1").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>