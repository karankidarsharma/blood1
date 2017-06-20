
<?php
  if(isset($_GET['success']) && $_GET['success'] == 'logout/successful')
      {
        session_start();
        session_destroy();
      }
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

 <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="div.css">
  

  <script language="javascript" type="text/javascript">
function validateForm(){

var x = document.forms["form1"]["select1"].value;
var y = document.forms["form1"]["select2"].value;
if( x== "Choose a City"){

  document.getElementById("sError").innerHTML = "please choose a city!";
  return false;
} else {

  document.getElementById("sError").innerHTML = "";
  
}

if( y == "Choose a group"){
  document.getElementById("fError").innerHTML = "Please Choose a group"
  return false;
} else {

  document.getElementById("fError").innerHTML = "";
  
}



}



</script>
</head>




<body onload="myFunction()" style="margin:0;">
<div id="loader1"><h1 style=" font-size:50px; text-align: center;"> </br><b> Loading  Site</b><img src="image/2.gif"></br> </h1></div>
<div id="loader"><h1 style="color:grey; font-size:30px; text-align: center;"> </h1></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
  








 <nav class="navbar navbar-inverse nav1">
  <div class="container-fluid">
    <div class="navbar-header ">
      <a class="navbar-brand" href="index.php">Donate Blood</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="btn-default"><a href="index.php?success1">Home</a></li>
       <li><a href="profile.php">Edit your profile</a></li>
      <li><a href="refer.php">Refer A Friend</a></li>
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

<h1 class="h1">BLOOD DONATION NEWZELAND</h1>

</header>
<body>
<div class="container">
<div class="div2 dashed-borders responsive">
<div class="div4 dashed-borders responsive">
<h2><strong>Find A Blood Doner</strong></h2>
<form name="form1" id="form1" method="post" target="_blank" onsubmit="return validateForm();" action="index1.php" >
	<h3 class="a2">Choose A City</h3></br>
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
            <p id="sError" style="font-size:20px;"></p>
          </br>
    <h3 class="a2">Choose Blood Group</h3></br>
    <select name="select2" class="select" id="select2" >
							<option value="Choose a group">Choose a group</option>
              <?php 
      include('db_connect.php');

      $query="SELECT blood_group FROM blood_group";
     $result=mysqli_query($con,$query);
     while($row=mysqli_fetch_assoc($result)){

$a=$row['blood_group'];
    echo "<option value=$a>$a</option>";
 }


   mysqli_close($con);  
        
?>







              <?php
/*$blood = array($a);
$arrlength = count($blood);

for($x = 0; $x<$arrlength; $x++){

echo "<option value='$blood[$x]';>$blood[$x]</option>";

}
*/

?>
              
							</select>
              <p id="fError" style="font-size:20px;"></p>
            </br>
						
     <input type="submit" class="btn btn-danger" name="Search" value="Search">


</form>
</div>
<div class="div6 ">
  <h2><strong>NEWS feeds</strong></h2>
<p style="text-align:center;color:grey;">
<?php
include('db_connect.php');

$query="SELECT * FROM news";
$result=mysqli_query($con ,$query);
while($row=mysqli_fetch_assoc($result)){

  $m=$row['info'];

  echo $m;
} 

?>




<h2>Support the Foundation</h2>
<p style="color:black;">Get all of your online shopping done and support the FABC with Amazon Smile, 
  the charitable arm of Amazon. Get your everyday shopping done, 
  while 0.5% of your purchase will be donated to the Foundation for America's Blood Centers!</p>
  </div>
  <div class="div6 responsive">

<iframe class="img-rounded" src="https://www.youtube.com/embed/vv4Y506amdQ" frameborder="0" allowfullscreen></iframe>


  </div>
  <div class="div6 ">
<h2>" We are!"</h2>

<p style="color:black;">This video features real blood recipients in everyday situations. 
  Without volunteer blood donors, 
  these ordinary people would not be alive today. Watch the video.</p>


  </div>
</div>
<div class="div3 responsive">
  <div class="div5">




<div class="w3-content w3-section" style="max-width:600px; ">
  

  <img class="mySlides w3-animate-fading" src="image/a1.jpg" style="width:600px; height:300px;">
  <img class="mySlides w3-animate-fading" src="image/d2.png" style="width:600px; height:300px;">
  <img class="mySlides w3-animate-fading" src="image/a2.png" style="width:600px; height:300px;">
  <img class="mySlides w3-animate-fading" src="image/a4.jpg" style="width:600px; height:300px;">
</br>
<h3 class="p1"> You can save life!</h3>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}
</script>




  </div>
  <div class="div5 responsiver">
    <h1 style="font-family:Rod;"> Our Top Donars</h2>
    <label>Waikato</label>
     <div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
  aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width:40%">
    40% From Waikato
  </div>
</div>
<label>Hamilton</label>
<div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
  aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
    50% from Hamilton
  </div>
</div>

<label>Auckland</label>
<div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:5%">
    5% Auckland
  </div>
</div>
<label>Cambridge</label>
<div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:5%">
    5% Cambridge
  </div>
</div>
<p class="p1"> we love to hear from you! "I want to donate blood!" </p>
  </div>
  <div class="div5 responsive">
<h2 style="font-family:Rod;">Help to save lives by donating blood</h2>
<p style="color:black;">America's Blood Centers' 
  member organizations make up North America's largest network of non-profit community blood centers, which operate more than 600 blood donation collection sites. Together the network provides half the U.S. blood supply to over 3,500 hospitals and healthcare facilities. 
  America's Blood Centers is not affiliated with the American Red Cross.member organizations make up North America's largest network of non-profit community blood centers, which operate more than 600 blood donation collection sites. Together the network provides half the U.S. blood supply to over 3,500 hospitals and healthcare facilities. 
  America's Blood Centers is not affiliated with the American Red Cross.</p>

</div>
<div class="div5 responsive">
  <h2 style="font-family:Rod;">Thanks to Donar</h2>
  <p style="color:black;">
<img class="img-rounded" src="image/thanks.png">
</br>
</br>
<p style="color:black;"> 
At its core, ThankADonor is a community, 
drawn together by the generosity of those willing to give something of themselves to a complete stranger.
While most recipients and donors will never know each other, here visitors can meet people just like them, 
read their stories, see their pictures and inspire others to give.drawn together by the generosity of those willing to give something of themselves to a complete stranger.
While most recipients and donors will never know each other, here visitors can meet people just like them, 
read their stories, see their pictures and inspire others to give.drawn together by the generosity of those willing to give something of themselves to a complete stranger.
While most recipients and donors will never know each other, here visitors can meet people just like them, 
read their stories, see their pictures and inspire others to give.drawn together by the generosity of those willing to give something of themselves to a complete stranger.
While most recipients and donors will never know each other, here visitors can meet people just like them, 
read their stories, see their pictures and inspire others to give.




  </p>
</br>
</br>
</div>

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