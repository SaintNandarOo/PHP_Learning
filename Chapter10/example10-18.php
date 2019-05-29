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
	$st = $conn->prepare( "SELECT sign FROM zodiac WHERE element LIKE ? OR planet LIKE ?" );
	// SELECT sign FROM zodiac WHERE element LIKE 'earth' OR planet LIKE 'Mars'
	$st->execute( array( 'earth','Mars' ) );
	while ( $row = $st->fetch() ) {
		print $row[0] . "<br/>";
	}
	$st = $conn->prepare( "SELECT sign FROM zodiac WHERE element LIKE :element OR planet LIKE :planet" );
	$st->execute( array( 'planet' => 'Mars', 'element' => 'earth' ) );
	while ( $row = $st->fetch() ) {
		print $row[0] . "<br/>";
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
