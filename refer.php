<?php session_start();
$_SESSION['suser'] = "user";
?>


<div class="holder">
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
<script language="javascript" type="text/javascript">
function validateForm(){

var x = document.forms["form1"]["text1"].value;
var y = document.forms["form1"]["text2"].value;
var z = document.forms["form1"]["email"].value;
var a = document.forms["form1"]["text3"].value;
var b = document.forms["form1"]["text4"].value;
var c = document.forms["form1"]["email2"].value;
var d = document.forms["form1"]["number"].value;
if( x == ""){

  document.getElementById("t1").innerHTML = "Please Enter First Name*";
  return false;
}
else {
  document.getElementById("t1").innerHTML = "";
} 

  if( y == ""){
  document.getElementById("t2").innerHTML = "Please Enter Last Name*";
  return false;
}else {
  document.getElementById("t2").innerHTML = "";
}

if(z == ""){
 document.getElementById("e1").innerHTML = "Please Enter Email*";
 return false;

}else
{
 document.getElementById("e1").innerHTML = "";

} 
if(a == ""){

document.getElementById("t3").innerHTML = "Please Enter First Name*"
   return false;
}else {

  document.getElementById("t3").innerHTML = ""

}

if(b == ""){
  document.getElementById("t4").innerHTML = "Please Enter Last Name*";
  return false;
}else {
  document.getElementById("t4").innerHTML = "";
}

if(c == ""){
 document.getElementById("e2").innerHTML = "Please Enter Email*";
 return false;

}else {

  document.getElementById("e2").innerHTML = "";
}
if(d == ""){
  document.getElementById("e3").innerHTML = "Please Insert a Valid Phone No*";
} else{
  document.getElementById("e3").innerHTML = "";
}

}
</script>


 <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="div.css">


</head>




<body onload="myFunction()" style="margin:0;">
<div id="loader1"><h1 style=" font-size:50px; text-align: center;"> </br><b> Loading  Form</b><img src="image/2.gif"></br> </h1></div>
<div id="loader"><h1 style="color:grey; font-size:30px; text-align: center;"> </h1></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
  



 <nav class="navbar navbar-inverse nav1">
  <div class="container-fluid">
    <div class="navbar-header ">
      <a class="navbar-brand" href="index.php">Donate Blood</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
       <li><a href="profile.php">Edit your profile</a></li>
      <li class="active"><a href="refer.php">Refer A Friend</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="privacy.php">Privacy</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register Here!</a></li>
      <li><a href="admin/admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
    </ul>
  </div>
</nav>
<header class="jumbotron header h1">

<h1 class="h11">BLOOD DONATION NEWZELAND</h1>

</header>
<body>
<div class="container">
<div class="div2 dashed-borders">
<div class="div4 dashed-borders">
<h2><strong>NEWS feeds</strong></h2>
<p style="text-align:center;color:grey;">O+ve Blood Required Call:02122344344</br>
                                         AB+ve Blood Required Call:02122344344</br>
                                         O-ve Blood Required Call:02122344344</br>
                                         O+ve Blood Required Call:02122344344</br>
                                         B+ve Blood Required Call:02121235662</p>

</div>
<div class="div6">
<h2>Support the Foundation</h2>
<p style="color:black;">Get all of your online shopping done and support the FABC with Amazon Smile, 
  the charitable arm of Amazon. Get your everyday shopping done, 
  while 0.5% of your purchase will be donated to the Foundation for America's Blood Centers!</p>
  </div>
  <div class="div6">

<iframe class="img-rounded" src="https://www.youtube.com/embed/vv4Y506amdQ" frameborder="0" allowfullscreen></iframe>


  </div>
  <div class="div6>">
<h2>" We are!"</h2>

<p style="color:black;">This video features real blood recipients in everyday situations. 
  Without volunteer blood donors, 
  these ordinary people would not be alive today. Watch the video.</p>


  </div>
</div>
<div class="div3">
  

 <form id="form1" onsubmit="return validateForm();" action="refer1.php" method="post" class="form-horizontal" enctype="multipart/form-data" >
  <h1 style="text-align:center;"> Refer To A Friend!</h1>
</br>
<div class="div7">
  <h3><strong>Your Details!</strong></h3>
</br>
     <label >*First Name:</label>
    <input type="text" id="text1" name="text1" value="">
    <p id="t1" ></p>
 
   </br>
   <label >*Last Name:</label>
    <input type="text" id="text2" name="text2" value="">
 <p id="t2" ></p>
   </br>
 
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label for="email">*Email:</label>
    <input type="email"  id= "email" name="email">
 <p id="e1" ></p>
  </br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp<label for="submit" style="color:white;">.</label>
  <button type="submit" class="btn btn-danger btn-lg" >Send!&nbsp<span class="glyphicon glyphicon-send"></span></button>
</div>
<div class="div7">
  <h3><strong>Friends Details!</strong></h3>
  </br>
 &nbsp&nbsp&nbsp&nbsp<label >*First Name:</label>
    <input type="text" id="text3" name="text3">
  <p id="t3" ></p>
   </br>
   &nbsp&nbsp&nbsp&nbsp<label s>*Last Name:</label>
    <input type="text" id="text4" name="text4">
  <p id="t4" ></p>
   </br>
 
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label for="email">*Email:</label>
    <input type="email" id="email2" name="email2">
 <p id="e2" ></p>
  </br>
   <label for="number">*Phone no:+64</label>
    <input type="number" id="number" name="number">
 <p id="e3" ></p>
  </br>




</form>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  </div>
</div>
  </body>
</br>
</div>
  <footer class="f1">
  </br>
    <p>This site is only created as demo for a class project. 
  you don't have anykind of permission to copy the content from this site</p>
  <p>Copyrights &copy karan kidar sharma 2017
  </p>
</br>
</footer>
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

