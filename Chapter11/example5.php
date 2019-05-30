<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'testing';
try {
	$conn = new PDO( 'mysql:host=' . $servername . '; dbname=' . $dbname, $username, $password );
	// set the PDO error mode to exception
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	// begin the transaction
	$conn->beginTransaction();
	//our SQL statements
	$conn->exec( "CREATE TABLE searches (
	searchterm VARCHAR(255) NOT NULL,
	dt DATETIME NOT NULL,
	source VARCHAR(15) NOT NULL )"
	);
	$conn->exec( "CREATE TABLE searchsummary (
		searchterm VARCHAR(255) NOT NULL,
		source VARCHAR(15) NOT NULL,
		sdate DATE NOT NULL,
		searches INT UNSIGNED NOT NULL,
		PRIMARY KEY (searchterm, source, sdate) )"
	);
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
