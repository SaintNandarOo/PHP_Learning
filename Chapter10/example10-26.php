<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'testing';
try {
	$conn = new PDO( 'mysql:host=$servername; dbname=$dbname', $username, $password );
	// set the PDO error mode to exception
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	// begin the transaction
	$conn->beginTransaction();
	// our SQL statements
	$st = $conn->prepare( "SELECT * FROM imaginary_table" );
	if ( ! $st ) {
		$error = $db->errorInfo();
		print 'Problem ' . $error[2];
	}
	// commit the transaction
	$conn->commit();
} catch ( PDOException $e ) {
	// roll back the transaction if something failed
	$conn->rollback();
	echo 'Error: ' . $e->getMessage();
}
$conn = null;
?>
