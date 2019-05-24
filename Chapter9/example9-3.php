<?php
if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
	print '<form action="';
	echo htmlentities( $_SERVER['SCRIPT_NAME'] );
	print '" method="post"> What is your first name? <input type="text" name="first_name" /><input type="submit" value="Say Hello" /></form>';
} else {
	echo 'Hello, ' . $_POST['first_name'] . '!';
}
?>
