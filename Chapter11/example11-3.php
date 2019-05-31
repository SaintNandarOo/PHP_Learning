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
	$st = $conn->prepare( "SELECT COUNT( * ) FROM searchsummary WHERE sdate = ?" );
	$st->execute( array( date ( 'Y-m-d', strtotime( 'yesterday' ) ) ) );
	$row = $st->fetch();
	// no matches in cache
	if ( $row[0] == 0 ) {
		$st2 = $conn->prepare( "SELECT searchterm, source, date( dt ) AS sdate, COUNT( * ) as searches FROM searches WHERE date( dt ) = ?" );
		$st2->execute( array( date( 'Y-m-d', strtotime( 'yesterday' ) ) ) );
		$stInsert = $conn->prepare( "INSERT INTO searchsummary ( searchterm, source, sdate, searches ) VALUES ( ?, ?, ?, ? )" );
		while ( $row = $st2->fetch( PDO::FETCH_NUM ) ) {
			$stInsert->execute( $row );
		}
	}
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
