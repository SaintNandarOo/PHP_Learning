<?php 
$meals = array(
	'Walnut Bun' => 1, 
	'Cashew Nuts and White Mushrooms' => 4.95, 
	'Dried Mulberries' => 3.00, 
	'Eggplant with Chili Sauce' => 6.50, 
	'Shrimp Puffs' => 0
);
foreach ( $meals as $dish => $price ) { 
	$meals[ $dish ] = $meals[ $dish ] * 2;
}
foreach ( $meals as $dish => $price ) {
	printf( "The new price of %s is \$%.2f.<br>",$dish,$price );
}
?>
