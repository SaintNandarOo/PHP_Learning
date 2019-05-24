<?php
$choices = array(
	'eggs' => 'Eggs Benedict',
	'toast' => 'Buttered Toast with Jam',
	'coffee' => 'Piping Hot Coffee'
);
if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
	print '<form action="';
	echo htmlentities( $_SERVER['SCRIPT_NAME'] );
	print '" method="post"><br>';
	foreach ( $choices as $key => $choice ) {
		echo '<input type="radio" name="food" value="' . $key . '"/>' . $choice . '<br>';
	}
	print '<input type="submit" value="OK">';
	print '</form>';
} else {
	if ( ! array_key_exists( $_POST[ 'food' ], $choices ) ) {
		echo 'You must select a valid choice.';
	}
}
?>
