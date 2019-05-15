<?php 
$row_styles = array( 'even','odd' );
$dinner = array( 'Sweet Corn and Asparagus', 'Lemon Chicken', 'Braised Bamboo Fungus' ); 
print "<table><br>";
for ( $i = 0, $num_dishes = count( $dinner ); $i < $num_dishes; $i++ ) { 
	echo '<tr class="' . $row_styles[ $i % 2 ] . '">';
	echo "<td>Element $i</td><td>". $dinner[ $i ] . "</td></tr><br>";
}
print '</table>';
?>
