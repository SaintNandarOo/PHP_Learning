<?php 
require 'example6-7.php';
$drink = new Entree( 'Glass of Milk', 'milk' );
if ( $drink -> hasIngredient( 'milk ') ) {
	print "Yummy!";
}
?>
