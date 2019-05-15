<?php 
$row_styles = array( 'even','odd' ); 
$style_index = 0;
$meal = array(
	'breakfast' => 'Walnut Bun',
	'lunch' => 'Cashew Nuts and White Mushrooms',
	'snack' => 'Dried Mulberries',
	'dinner' => 'Eggplant with Chili Sauce'
);
print "<table> <br>";
foreach ( $meal as $key => $value ) {
	print '<tr class="' . $row_styles[ $style_index ] . '">';
	print "<td>$key</td><td>$value</td></tr><br>";
}
print '</table>';
?>
