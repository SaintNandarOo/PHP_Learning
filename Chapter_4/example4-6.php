<?php 
$lunch[] = 'Dried Mushrooms in Brown Sauce'; 
$lunch[] = 'Pineapple and Yu Fungus';
$dinner = array( 'Sweet Corn and Asparagus', 'Lemon Chicken', 'Braised Bamboo Fungus' );
echo "For Lunch <br>";
$dinner[] = 'Flank Skin with Spiced Flavor';
foreach ( $lunch as $key => $value ) {
	echo "$value <br>";
}
echo "For Dinner <br>";
foreach ( $dinner as $key => $value ) {
	echo "$value <br>";
}
?>
