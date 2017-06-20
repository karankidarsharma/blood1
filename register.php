<?php
define('MyConst', TRUE);
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
var c = document.forms["form1"]["password"].value;
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
      
  } if(d == "Choose a City"){

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
      
  }if(c == ""){

    document.getElementById("e6").innerHTML = "Please Enter A Password*"
    return false;
  } else {

      document.getElementById("e6").innerHTML = ""  
      
  }
    


}



</script>
<script type="text/javascript">
setTimeout("window.close();", 3000);
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
       <li><a href="profile.php">Edit your profile</a></li>s
      <li ><a href="refer.php">Refer A Friend</a></li>
      <li ><a href="contact.php">Contact Us</a></li>
      <li><a href="privacy.php">Privacy</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register Here!</a></li>
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
<p></p>

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
  
<form id="form1" onsubmit="return validateForm()"  action="register1.php" method="post" class="form-horizontal" onsubmit="javascript:return validate ();">
  <h1 style="text-align:center;"> <strong>Register For Free!</strong></h1>
  <?php
  if(isset($_GET['success']) && $_GET['success'] == 'record/created successfully')
      {
         
        //echo "<a style='color:#990000;'>.</a>";

echo '<div class="alert alert-danger" role="alert"  style="width:auto;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Record created successfully!</strong>
</div>';



      }
      ?>
      <?php
  if(isset($_GET['success']) && $_GET['success'] == 'error existing user')
      {
         
        //echo "<a style='color:#990000;'>.</a>";

echo '<div class="alert alert-danger" role="alert"  style="width:auto;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Email Already Registered!</strong>
</div>';



      }
      ?>

</br>
</br>
  
   &nbsp&nbsp  <label >*First Name:</label>
    <input type="text" id="text1" name="text1" value="">
  <p id="e1"></p>
   </br>
   &nbsp&nbsp&nbsp<label >*Last Name:</label>
    <input type="text" id="text2" name="text2">
  <p id="e2"></p>
   </br>
  &nbsp&nbsp&nbsp&nbsp  <label >*Phone No:</label>
    <input type="text" id="text3" name="text3">
  <p id="e3"></p>
   </br>
   &nbsp&nbsp&nbsp<label for="select2">Choose city:</label>
   <select name="select1" class="select" id="select1">
                        <option value="Choose a City">Choose a city</option>
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
              <option value="Choose a group">Choose a group</option>
              <option value="A">A</option>
              <option value="A+ve">A+ve</option>
              <option value="B-ve">B-ve</option>
              <option value="B">B</option>
              <option value="B+ve">B+ve</option>
              <option value="B-ve">B-ve</option>
              <option value="AB">AB</option>
              <option value="AB+ve">AB+ve</option>
              <option value="O">O</option>
              <option value="O+ve">O+ve</option>
              <option value="O-ve">O-ve</option>
              <option value="Ab-ve">AB-ve</option>
              </select></li>
           <p id="e4"></p>
            </br>
     
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label >*Email:</label>
    <input type="email" id="email" name="email">
 <p id="e5"></p>
  </br>
  
    &nbsp&nbsp&nbsp&nbsp&nbsp<label >*Password:</label>
    <input type="password" id="password" name="password" >
  <p id="e6"></p>
</br>


<button type="submit" class="btn btn-danger btn-lg" style="margin-left:100px;" name="submit2">Register!&nbsp<span class="glyphicon glyphicon-send"></span></button>
</ul>
</form>
</br></br></br></br></br></br></br></br></br>



  </div>
</div>
  </body>
</br>

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
</div>
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