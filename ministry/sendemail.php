<?php 
	if(isset($_POST['submit'])){
	$to=$_POST['email'];
	$subject = '7topics simple email';
	$name=$_POST['name'];
	$comment=$_POST['comment'];
	$message = '<html><body>';
	$message .= "Dear " . $name . ",</br>Your details are given below:</br><table style='border-color: #000;' cellpadding='10'>";
	$message .= "<tr style='background: #eee;'>
	 <td><strong>Name:</strong></td>
	 <td>" . $name . "</td>
	 </tr>";
	$message .= "<tr><td><strong>Comment:</strong></td><td>" . $comment . "</td></tr>";
	$message .= "</table>";
	$message .= "By Rahul Ranjan <br/><a href='http://7topics.com'>7topics.com</a>";
	$message .= "</body></html>";
	$headers ='From: webmaster@7topics.com' . "\r\n" .
	'Reply-To: webmaster@7topics.com' . "\r\n" .
	'MIME-Version: 1.0'."\r\n".
	'Content-Type: text/html; charset=ISO-8859-1'."\r\n".
	'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
}
?>