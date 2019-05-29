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
	// Prepare
	$st = $conn->prepare( "SELECT sign FROM zodiac WHERE element LIKE ?" );
	// Execute once
	$st->execute(array( 'fire' ));
	while ( $row = $st->fetch() ) {
		print $row[0] . "<br/>";
	}
	// Execute again
	$st->execute(array( 'water' ));
	while ( $row = $st->fetch() ) {
		print $row[0] . "<br/>";
	}

	// commit the transaction
	$conn->commit();
	}
catch(PDOException $e)
	{
	// roll back the transaction if something failed
	$conn->rollback();
	echo 'Error: ' . $e->getMessage();
	}

$conn = null;
?>
