<?php
if($_POST['psubmit']) {
	$firstname = $_POST['pfirstname'];
	$lastname = $_POST['plastname'];
	$name = $firstname . ' ' . $lastname;
	$email = $_POST['pemail'];
	$message = $_POST['pmessage'];
	$from = 'From: Portfolio Site Contact Form';
	$to = 'amandajtsiang@gmail.com';
	$subject = 'New message for Manda';
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
	
	if(mail ($to, $subject, $body, $from)){
		echo '<script type="text/javascript">alert("Thanks, your message has been sent!"); location="http://amandatsiang.design/contact.html"</script>';
	}
	
	else{
		echo '<script type="text/javascript">alert("Oops...There was a problem sending your message."); location="/contact.html"</script>';
	}
}
?>
