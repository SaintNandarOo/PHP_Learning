<?php  
include 'example6-7.php';
class ComboMeal extends Entree {
	/**
	 * Constructor
	 * Checking each provided ingredient of the combo is itself an Entree object
	 * @param string $name, $ingredient
	 */
	public function __construct( $name, $entrees ) { 
		parent::__construct( $name, $entrees ); 
		foreach ( $entrees as $entree ) {
			if ( ! $entree instanceof Entree ) {
				throw new Exception( 'Elements of $entrees must be Entree objects' );
			} 
		}
	}
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
?>