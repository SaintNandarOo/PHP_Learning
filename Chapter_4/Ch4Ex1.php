<?php 
$pop = array(
	'New York, NY' => 8175133, 
	'Los Angeles, CA' => 3792621, 
	'Chicago, IL' => 2695598, 
	'Houston, TX' => 2100263, 
	'Philadelphia, PA' => 1526006, 
	'Phoenix, AZ' => 1445632, 
	'San Antonio, TX' => 1327407, 
	'San Diego, CA' => 1307402, 
	'Dallas, TX' => 1197816, 
	'San Jose, CA' => 945942
);
echo "<table>";
foreach ( $pop as $location => $population ) {
	echo "<tr><td>$location</td><td>". number_format( $population ) . "</td></tr><br>";
}
$total = array_sum( $pop );
echo "<tr><td> Total </td><td>". number_format( $total ) . "</td></tr>";
echo "</table><br>";
?>
