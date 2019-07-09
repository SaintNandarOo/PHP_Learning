<?php
header( 'Content-Type: text/xml' );
print '<?xml version="1.0"?>';
print '<shows>';
$shows = array(
	array (
		'name' => 'Modern Family',
		'channel' => 'ABC',
		'start' => '9:00 PM',
		'duration' => '30'
	),
	array(
		'name' => 'Law & Order: SVU',
		'channel' => 'NBC',
		'start'    => '9:00 PM',
		'duration' => '60'
	)
);
foreach ( $shows as $show ) {
	print '<show>';
	foreach($show as $tag => $data) {
		print '<' . $tag . '>' . htmlspecialchars($data) . '</' . $tag . '>';
	}
		print '</show>';
	}
	print '</shows>';
?>
