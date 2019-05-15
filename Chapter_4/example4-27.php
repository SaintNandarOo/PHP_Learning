<?php 
$meal = array(
	'breakfast' => 'Walnut Bun',
	'lunch' => 'Cashew Nuts and White Mushrooms',
	'snack' => 'Dried Mulberries',
	'dinner' => 'Eggplant with Chili Sauce'
);
print "Before Sorting:<br>";
foreach ( $meal as $key => $value ) {
	print" \$meal:$key$value<br>"; 
}
arsort( $meal );
print "<br>After Sorting:<br>";
foreach ( $meal as $key => $value ) {
	print" \$meal:$key$value<br>"; 
}
?>
