<?php
$servername = "localhost";
$username = "root";
$password = "pwdpwd";
$dbname = "testing";
try {
	$conn = new PDO( "mysql:host=$servername; dbname=$dbname", $username, $password );
	// set the PDO error mode to exception
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	// begin the transaction
	$conn->beginTransaction();
	// A list of field names
	$fields = array( 'symbol', 'planet', 'element' );
	$placeholders = array();
	$values = array();
	foreach ( $fields as $field ) {
		// One placeholder per field
		$placeholders[] = '?';
		// Assume the data is coming from a form
		$values[] = $_POST[ $field ];
	}
	$st = $conn->prepare( 'INSERT INTO zodiac (' . implode( ',', $fields ) .') VALUES (' . implode( ',', $placeholders ) .')' );
	// Execute the query
	$st->execute( $values );
	// commit the transaction
	$conn->commit();
	echo 'New table created successfully';
} catch ( PDOException $e ) {
	// roll back the transaction if something failed
	$conn->rollback();
	echo 'Error: ' . $e->getMessage();
}
$conn = null;
?>
