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
	$st = $conn->prepare( "INSERT INTO family (id, name) VALUES (?,?)" );
	$st->execute( array( 4, 'Vitory' ) );
	$st = $conn->prepare( "DELETE FROM family WHERE name LIKE ?" );
	$st->execute( array( 'Fredo' ) );
	$st = $conn->prepare( "UPDATE family SET is_naive = ? WHERE name LIKE ?" );
	$st->execute( array( 1, 'Kay' ) );
	// commit the transaction
	$conn->commit();
	echo 'New records created successfully';
} catch ( PDOException $e ) {
	// roll back the transaction if something failed
	$conn->rollback();
	echo 'Error: ' . $e->getMessage();
}
$conn = null;
?>
