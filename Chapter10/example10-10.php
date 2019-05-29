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
	$rows = $conn->query( "SELECT symbol, planet FROM zodiac ORDER BY planet" );
	$firstRow = $rows->fetch();
	print 'The first results are that ' . $firstRow['symbol'] . ' goes with ' . $firstRow['planet'];
	// commit the transaction
	$conn->commit();
} catch ( PDOException $e ) {
	// roll back the transaction if something failed
	$conn->rollback();
	echo 'Error: ' . $e->getMessage();
}
$conn = null;
?>
