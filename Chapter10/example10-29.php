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
	$conn->exec( "CREATE TABLE users (
		id  INT NOT NULL AUTO_INCREMENT,
		name VARCHAR(255),
		PRIMARY KEY(id) )"
	);
	// No need to insert a value for 'id' -- SQLite assigns it
	$st = $conn->prepare( "INSERT INTO users (name) VALUES (?)" );
	// These rows are assigned 'id' values
	foreach ( array( 'Jacob', 'Ruby' ) as $name ) {
		$st->execute( array( $name ) );
	}
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
