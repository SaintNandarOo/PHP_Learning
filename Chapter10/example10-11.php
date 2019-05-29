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
	$row = $conn->query( "SELECT symbol, planet FROM zodiac", PDO::FETCH_BOUND ); 
	// Put the value of the 'symbol' column in $symbol
	$row->bindColumn( 'symbol', $symbol );
	// Put the value of the second column ('planet') in $planet
	$row->bindColumn( 2, $planet );
	while ( $row->fetch() ) {
		print $symbol . ' goes with ' . $planet . '.<br>';
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
