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
	$conn->exec( "INSERT INTO zodiac (id, sign, symbol, planet, element, start_month, start_day, end_month, end_day)
		VALUES (1, 'Aries', 'Ram', 'Mars', 'fire', 3, 21, 4, 19)" );
	$conn->exec( "INSERT INTO zodiac (id, sign, symbol, planet, element, start_month, start_day, end_month, end_day)
		VALUES (2, 'Taurus', 'Bull', 'Venus', 'earth', 4, 20, 5, 20)" );
	$conn->exec( "INSERT INTO zodiac (id, sign, symbol, planet, element, start_month, start_day, end_month, end_day)
		VALUES (3, 'Gemini', 'Twins', 'Mercury', 'air', 5, 21, 6, 21)" );
	$conn->exec( "INSERT INTO zodiac (id, sign, symbol, planet, element, start_month, start_day, end_month, end_day)
		VALUES (4, 'Cancer', 'Crab', 'Moon', 'water', 6, 22, 7, 22)" );
	$conn->exec( "INSERT INTO zodiac (id, sign, symbol, planet, element, start_month, start_day, end_month, end_day)
		VALUES (5, 'Leo', 'Lion', 'Sun', 'fire', 7, 23, 8, 22)" );
	$conn->exec( "INSERT INTO zodiac (id, sign, symbol, planet, element, start_month, start_day, end_month, end_day)
		VALUES (6, 'Virgo', 'Virgin', 'Mercury', 'earth', 8, 23, 9, 22)" );
	$conn->exec( "INSERT INTO zodiac (id, sign, symbol, planet, element, start_month, start_day, end_month, end_day)
		VALUES (7, 'Libra', 'Scales', 'Venus', 'air', 9, 23, 10, 23)" );
	$conn->exec( "INSERT INTO zodiac (id, sign, symbol, planet, element, start_month, start_day, end_month, end_day)
		VALUES (8, 'Scorpio', 'Scorpion', 'Mars', 'water', 10, 24, 11, 21)" );
	$conn->exec( "INSERT INTO zodiac (id, sign, symbol, planet, element, start_month, start_day, end_month, end_day)
		VALUES (9, 'Sagittarius', 'Archer', 'Jupiter', 'fire', 11, 22, 12, 21)" );
	$conn->exec( "INSERT INTO zodiac (id, sign, symbol, planet, element, start_month, start_day, end_month, end_day)
		VALUES (10, 'Capricorn', 'Goat', 'Saturn', 'earth', 12, 22, 1, 19)" );
	$conn->exec( "INSERT INTO zodiac (id, sign, symbol, planet, element, start_month, start_day, end_month, end_day)
		VALUES (11, 'Aquarius', 'Water Carrier', 'Uranus', 'air', 1, 20, 2, 18)" );
	$conn->exec( "INSERT INTO zodiac (id, sign, symbol, planet, element, start_month, start_day, end_month, end_day)
		VALUES (12, 'Pisces', 'Fishes', 'Neptune', 'water', 2, 19, 3, 20)" );
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
