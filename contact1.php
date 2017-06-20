<?php session_start();
$a=$_REQUEST['text1'];
$b=$_REQUEST['email'];
$c=$_REQUEST['text2'];
if($a && $b && $c != " "){
	$_SESSION['suser']=$u;

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

$mail->setFrom( $c, 'Blood Donor');
$mail->addAddress('mearthkid@gmail.com','New Enquiry' );     // Add a recipient
$mail->addReplyTo($b,$a );

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Donate Blood';
$mail->Body    = " <html>
   					<br><br>
                   <body >
                   <table style='width:100%; border:4px solid #990000; '>
                   <tr><td> 
                   <header style='font-family:Rod; font-size:60px; color:white;text-align:center;padding:20px;background-color:#e81434;'>
                   <b>Enqiry</b></header><br>

                      </td></tr>
                   <tr><td style='margin:20px; padding:20px;'> <p style='font-size:20px; color:#990000;text-align:left;'> $a ask for Help!</p> 
                    <a>'$c'</a><br>
                  
                    </td></tr>
                    <ul>
                    <li>Name: $a </li>	

                    <li> Email Id: $b</li>

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
    header('location:contact.php?success=sent successfully');
}
} else{
	header('location:contact.php');
}

?>