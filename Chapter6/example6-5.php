<?php  
class Entree {
	public $name;
	public $ingredients = array();
	// Constructor
	public function __construct( $name, $ingredients ) {
		$this -> name = $name;
		$this -> ingredients = $ingredients;
	}
	/**
	 * Checking the ingredients
	 * @param string $ingredient
	 * @return boolean
	 */
	public function hasIngredient( $ingredient ) {
		return in_array( $ingredient, $this -> ingredients );
	}
}
$soup = new Entree ( 'Chicken soup', array( 'chicken', 'water' ) );
$sandwich = new Entree ('Chicken Sandwich', array( 'bread', 'chicken') );
?>
