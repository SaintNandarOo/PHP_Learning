<?php  
require 'example6-7.php';
class ComboMeal extends Entree {
	/**
	 * Checking the ingredients
	 * @param string $ingredient
	 * @return boolean
	 */
	public function hasIngredient( $ingredient ) { 
		foreach ( $this -> ingredients as $entree ) {
			if ( $entree -> hasIngredient( $ingredient ) ) { 
				return true;
			} 
		}
		return false; 
	}
}
$soup = new Entree( 'Chicken Soup', array( 'chicken', 'water' ) ); 
$sandwich = new Entree( 'Chicken Sandwich', array( 'chicken', 'bread' ) );
$combo = new ComboMeal( 'Soup + Sandwich', array( $soup, $sandwich ) );
foreach ( [ 'chicken', 'water', 'pickles', 'bread' ] as $ing ) { 
	if ( $combo -> hasIngredient( $ing ) ) {
		print "Something in the combo contains $ing.<br>"; 
	}
}
?>
