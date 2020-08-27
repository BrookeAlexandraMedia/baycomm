<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    </head>
  <body>    
           	
   <h2 class="text-center">Message Successfully Sent!</h2> 
    <button><a href="javascript:history.back()">Go Back</a></button>
          
    </body>
</html>
          
<!-- php contact form -->
          
 <?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];
	
	$mailTo = "info@ignition-innovations.com";
	$headers = "From: " .$mailFrom . "\r\n";
	$headers .= "Bcc: info@ignition-innovations.com" . "\r\n";
	$txt = "You have received an email from " .$name.".\n\n".$message;
	
	mail($mailTo, $subject, $txt, $headers);
	// header("Location: contact.php?mailsend");
	
}


// <?php
// Recipient
// $mailTo = 'info@ignition-innovations.com';

// Subject
// $subject = $_POST['subject'];

// Message 
// $message = $_POST['message'];

// Headers
// $headers = "From: " .$mailFrom;
// $headers = "Reply-To: info@ignition-innovations.com"
// header("Location: contact.php?mailsend");

// Send Email
// mail($mailTo, $subject, $txt, $message, $headers); 
