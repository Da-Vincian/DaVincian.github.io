<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'owenmoxham@bigpond.com';

	$email_subject = "New Form submission";

	$email_body = "Hi";

	$to = "owenmoxham@bigpond.com";

	$headers = "Hello";

	mail($to,$email_subject,$email_body,$headers);
?>

<html lang="en">

<form method="POST" name="myemailform" action="index2.html">

Enter Name: <input type="text" name="name">

Enter Email Address:  <input type="text" name="email">

Enter Message:  <textarea name="message"></textarea>

<input type="submit" value="Send Form">
</form>

</html>