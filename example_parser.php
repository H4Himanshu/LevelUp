<?php
if(isset($_POST['level-inpt']) && isset($_POST['learning-lvl']) && isset($_POST['email-id']) ){
	$n=$_POST['level-inpt'];
	$e=$_POST['learning-lvl'];
	$m=$_POST['email-id'];
	$message="<b>New Enquiry On lvlup.in</b><p></p><b>I would like to learn : </b> $n <br><br>My Learning Level :</b>  $e  <p><b>You can contact me on :</b>  $m </p>";


	require "phpmailer/class.phpmailer.php"; //include phpmailer class
    
    // Instantiate Class  
    $mail = new PHPMailer();  
    
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port


    // Authentication  
    $mail->Username   = "markatixcontact@gmail.com"; // Your full Gmail address
    $mail->Password   = "markatix@123"; // Your Gmail password

    // Compose
    // $mail->SetFrom(''+$_POST['n'],''+ $_POST['e']);
    // $mail->AddReplyTo(''+$_POST['n'],''+ $_POST['e']);;
    $mail->Subject = "New Message From lvlup.in";      // Subject (which isn't required)  
    $mail->MsgHTML($message);

    // Send To  
    $mail->AddAddress("hello@lvlup.in", "Admin");
    $mail->AddAddress("akshay@markatix.com", "Akshay Agarwal");
    $mail->AddAddress("imhchawla@gmail.com", "Hello"); // Where to send it - Recipient
    $result = $mail->Send();        // Send!  
    unset($mail);
    echo 'success';


	// $to="imhchawla@gmail.com";
	// $from=$e;
	// $subject="Contact Form Message";
	// $message="<b>Name:</b>'.$n.'<br><br>Email:</b> '.$e.'<p>'.$m.'</p>";
	// $headers="From: $from\n";
	// $headers="MIME-Version: 1.0\n";
	// $headers=Content-type: text/html; charset=iso-8859-1\n;
	// if(mail($to,$subject,$message,$headers))
	// {
	// 	echo "success";
	// }
	// else
	// {
	// 	echo"The server failed to send the message. Please Try Again Later.";
	// }
}
?>