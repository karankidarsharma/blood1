<?php
  if(isset($_GET['success']) && $_GET['success'] == 'error')
      {
        session_start();
        session_destroy();
      }
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
 
 <script language="javascript" type="text/javascript">
function validateForm(){

var x = document.forms["form1"]["text"].value;
var y = document.forms["form1"]["password"].value;
if( x== ""){

  document.getElementById("sError").innerHTML = "Field Cannot Be Left Blank*";
  return false;
} else{

  document.getElementById("sError").innerHTML = "";
  
}

if( y == ""){
  document.getElementById("fError").innerHTML = "Field Cannot Be left Blank*"
  return false;
}else{

  document.getElementById("fError").innerHTML = "";
  
}



}



</script>
  
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../bootstrap/js/jquery.min.js" rel="stylesheet" type="text/css">
  <link href="../bootstrap/css/js/bootstrap.min.js" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../index.css">
  <link rel="stylesheet" href="../div.css">
  

</head>




<body onload="myFunction()" style="margin:0;">
<div id="loader1"><h1 style=" font-size:50px; text-align: center;"> </br><b> Hello! Admin!</b><img src="image/2.gif"></br> </h1></div>
<div id="loader"><h1 style="color:grey; font-size:30px; text-align: center;"> </h1></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
 <nav class="navbar navbar-inverse nav1">
  <div class="container-fluid">
    <div class="navbar-header ">
      <a class="navbar-brand" href="../index.php">Donate Blood</a>
    </div>
     <ul class="nav navbar-nav">
      <li class="btn-default"><a href="../index.php">Home</a></li>
       <li><a href="../profile.php">Edit your profile</a></li>
      <li><a href="../refer.php">Refer A Friend</a></li>
      <li><a href="../contact.php">Contact Us</a></li>
       <li><a href="../privacy.php">Privacy</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../register.php"><span class="glyphicon glyphicon-user"></span> Register Here!</a></li>
      <li><a href="../admin/admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
    </ul>
  </div>
</nav>
<header class="jumbotron header h1">

<h1 class="h11">Hello! Admin!</h1>

</header>

<body>
<div class="container">
<div style="color:#990000; text-align:center; margin:auto; border:1px dashed; width:405px; float:centre; border-radius:3px;">
<form id="form1" onsubmit="return validateForm();" action="admincheck.php" method="post" class="form-horizontal" >
  <h1 style="text-align:center;"> <strong>Admin Login!</strong></h1>
</br>
<?php
  if(isset($_GET['success']) && $_GET['success'] == 'denied/Error connection')
      {
        echo "<a style='color:#990000;'>*Wrong username/password.</a>";
      }
      ?>
  </br>
</br>
   &nbsp&nbsp  <label >*Username:</label>
    <input type="text" id="text" name="text" value="">
  <p id="sError"></p>
   </br>
    &nbsp&nbsp  <label>*Password:</label>
    <input type="password" id="password" name="password" value="">
  <p id="fError"></p>
   </br>
<button type="submit" class="btn btn-danger btn-lg"  name="submit2">Login!&nbsp<span class="glyphicon glyphicon-send"></span></button>
</form>
</div>
  </body>
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
</html>