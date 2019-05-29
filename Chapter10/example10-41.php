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
	$conn->exec( "CREATE TABLE message (
		id INTEGER PRIMARY KEY AUTO_INCREMENT,
		posted_on DATETIME NOT NULL,
		author CHAR(255),
		subject CHAR(255),
		body MEDIUMTEXT,
		thread_id INT UNSIGNED NOT NULL,
		parent_id INT UNSIGNED NOT NULL,
		level INT UNSIGNED NOT NULL,
		thread_pos INT UNSIGNED NOT NULL )"
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
