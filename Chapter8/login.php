<?php
$email = $_GET['email'];
$password = $_GET['password'];
if ( $email && $password )
	echo 'Hello, you have provided <b>$email</b> as your login ID and your password is <b>$password</b>.';
else
	echo 'Login ID or password missing! Please <a href='example8-6.php'>try again</a>.';
?>
