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
	// our SQL statements
	$conn->exec( "INSERT INTO family (id, name) VALUES (1, 'Vito')" );
	$conn->exec( "DELETE FROM family WHERE name LIKE 'Fredo'" );
	$conn->exec( "UPDATE family SET is_naive = 1 WHERE name LIKE 'Kay'" );
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
