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
	$pairs = array( 'Mars' => 'water', 'Moon' => 'water', 'Sun' => 'fire' );
	$st = $conn->prepare( "SELECT sign FROM zodiac WHERE element LIKE :element AND planet LIKE :planet" );
	$st->bindParam( ':element', $element );
	$st->bindparam( ':planet', $planet );
	foreach ( $pairs as $planet => $element ) {
		// No need to pass anything to execute() --
		// the values come from $element and $planet
		$st->execute();
		var_dump( $st->fetch() );
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
