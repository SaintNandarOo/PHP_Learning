<?php  
require 'example6-7.php';
class PriceEntree extends Entree{
	function __construct( $name, $ingredients ) {
		parent::__construct( $name, $ingredients );
		foreach ( $this -> ingredients as $ingredient ) {
			if ( ! $ingredient instanceof \Meals\Ingredient ) {
				throw new Exception( 'Elements of $ingredients must be Ingredient objects' );
			}
		}
	}
	/**
	 * Get the total cost of ingredients 
	 * @return  mixed
	 */	
	public function getTotalCost() {
		return array_sum( $ingredients );
	}
}
?>
