<?php 
if(isset($_SESSION['suser'])){

}
else{
  header('location:refer.php');
}

$a=$_REQUEST['text1'];
$b=$_REQUEST['text2'];
$c=$_REQUEST['email'];
$d=$_REQUEST['text3'];
$e=$_REQUEST['text4'];
$f=$_REQUEST['email2'];
$g=$_REQUEST['number'];
if($a==" " || $b=="" || $c==""){

  header('location:refer.php');
}



require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mearthkid@gmail.com';                 // SMTP username
$mail->Password = 'mylifeover1';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom( $c, 'Become Blood Donor');
$mail->addAddress($f, $a."".$b);     // Add a recipient
$mail->addReplyTo($c, 'Become Blood Donor');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Donate Blood';
$mail->Body    = " <html>
                   <body >
                   <table style='width:100%; border:4px solid #990000; '>
                   <tr><td> 
                   <header style='font-family:Rod; font-size:60px; color:white;text-align:center;padding:20px;background-color:#e81434;'>
                   <b>Donate Blood</b></header><br>

                   <img src='http://herds.weebly.com/uploads/1/2/8/0/12808999/_2069162_orig.gif' width='100%';
                      height='300px';>;
                   </td></tr>
                   <tr><td style='margin:20px; padding:20px;'> <p style='font-size:20px; color:#990000;text-align:left;'>Hello $d,</p> 
                    <a>your friend <b>$a</b> has recommended you to
                    become a blood donar at  Blood Donation Newzealand.<br>
                    Your Donation can save Someones Life .
                    please kindly register and become a donor thanks</a><br>
                    <br><button type='button' style='width:110px; height:30px; background-color:#990000; color:white;'>
                    <a href='http://34.210.137.253/register.php' style='text-decoration:none; color:white;'>Register Now!</a></button> 
                  
                    </td></tr>
                    <ul>
                    <li>Referred By: $a $b</li>	

                    <li> Email Id: $c</li>

                    </ul>
                    '</table>

                    
                    <footer style='width:100%; background-color:#232056; text-align:center; padding:10px; color:white;font-size:1em;'>
                    <p>If you think you think you are seeing this Email By mistake Please Kindly Ignore.</p>
                    <p>Thanks</p> 


                    </footer></body></html>"
                    ;


$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
      $g=$_REQUEST['number'];
      $a=$_REQUEST['text1'];

$username = 'karank@amail.club';
$hash = 'Qazwsx123';
    
    // Message details
    //$numbers = array($number);
    $numbers = array('64'.$g);
    $sender = urlencode('Blood Donation');
    $message = rawurlencode('your friend request you to register on http://34.210.137.253/register.php and become a blood donor');
 
        $numbers = implode(',', $numbers);
 
    // Prepare data for POST request
    $data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
    // Send the POST request with cURL
    $ch = curl_init('http://api.txtlocal.com/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    // Process your response here
    echo header('location:refer.php?success=refered successfully');
}



?>