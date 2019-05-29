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
	$conn->exec( "CREATE TABLE zodiac (
		id INT UNSIGNED NOT NULL,
		sign CHAR(11),
		symbol CHAR(13),
		planet CHAR(7),
		element CHAR(5),
		start_month TINYINT,
		start_day TINYINT,
		end_month TINYINT,
		end_day TINYINT,
		PRIMARY KEY(id) )"
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
