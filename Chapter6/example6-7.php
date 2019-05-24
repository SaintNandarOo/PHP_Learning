<?php
class Entree {
	public $name;
	public $ingredients = array();
	/**
	 * Constructor
	 * Checking the $ingredients is array or not
	 * @param string $name, $ingredient
	 */
	public function __construct( $name, $ingredients ) {
		if ( ! is_array( $ingredients ) ) {
			throw new Exception('$ingredients must be an array');
		}
		$this -> name = $name;
		$this -> ingredients = $ingredients;
	}
	/**
	 * Checking the ingredients
	 * @param string $ingredient
	 * @return boolean
	 */
	public function hasIngredient( $ingredient ) {
		return in_array( $ingredient, $this->ingredients );
	}
}
?>
