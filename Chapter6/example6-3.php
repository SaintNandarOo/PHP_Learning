<?php
class Entree {
	public $name;
	public $ingredients = array();
	/**
	 * Checking the ingredients
	 * @param string $ingredient
	 * @return boolean
	 */
	public function hasIngredient( $ingredient ) {
		return in_array( $ingredient, $this -> ingredients );
	}
	/**
	 * Get sizes
	 * @return array
	 */
	public static function getSizes() {
	return array( 'small', 'medium', 'large' );
	}
}
$sizes = Entree::getSizes();
foreach ( $sizes as $size ) {
	echo "$size<br>";
}
?>
