<?php
class AvgStatement extends PDOStatement {
	public function avg() {
		$sum = 0;
		$vars = get_object_vars( $this );
		// Remove PDOStatement's built-in 'queryString' variable
		unset( $vars['queryString'] );
		foreach ( $vars as $var => $value ) {
			$sum += strlen( $value );
		}
		return $sum / count( $vars );
	}
}
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
	$row = new AvgStatement;
	$results = $conn->query( 'SELECT symbol, planet FROM zodiac', PDO::FETCH_INTO, $row );
	// Each time fetch() is called, $row is repopulated
	while ( $results->fetch() ) {
		print $row->symbol . ' belongs to ' . $row->planet . ' (Average: '. $row->avg() . ') <br/>';
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
