<?php
$choices = array(
	'eggs' => 'Eggs Benedict',
	'toast' => 'Buttered Toast with Jam',
	'coffee' => 'Piping Hot Coffee'
);
if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
	print '<form action="';
	echo htmlentities( $_SERVER['SCRIPT_NAME'] );
	print '" method="post"> <select name="food"><br>';
	foreach ( $choices as $key => $choice ) {
		echo '<option value='$key'>$choice</option><br>';
	}
	echo '</select>';
	print '<input type="submit" value="OK">';
	print '</form>';
} else {
	if ( ! array_key_exists( $_POST[ 'food' ], $choices ) ) {
		echo 'You must select a valid choice.';
	}
}
?>
