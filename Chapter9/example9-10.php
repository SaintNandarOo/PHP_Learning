<?php
$choices = array( 'Eggs','Toast','Coffee' );
echo '<select name="food"><br>';
foreach ( $choices as $choice) {
	echo '<option>$choice</option><br>';
}
echo '</select>';
if ( ! in_array( $_POST['food'], $choices ) ) {
	echo 'You must select a valid choice.';
}
?>
