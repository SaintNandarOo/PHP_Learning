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
	$st = $conn->prepare( "DELETE FROM family WHERE name LIKE ?" );
	$st->execute( array( 'Fredo' ) );
	print 'Deleted rows: ' . $st->rowCount() . '<br>';
	$st->execute( array( 'Sonny' ) );
	print 'Deleted rows: ' . $st->rowCount() . '<br>';
	$st->execute( array( 'Luca Brasi' ) );
	print 'Deleted rows: ' . $st->rowCount() . '<br>';
	$st = $conn->query( 'SELECT symbol, planet FROM zodiac' );
	$all= $st->fetchAll( PDO::FETCH_COLUMN, 1 );
	print 'Retrieved '. count( $all ) . ' rows';
	// commit the transaction
	$conn->commit();
} catch ( PDOException $e ) {
	// roll back the transaction if something failed
	$conn->rollback();
	echo 'Error: ' . $e->getMessage();
}
$conn = null;
?>
