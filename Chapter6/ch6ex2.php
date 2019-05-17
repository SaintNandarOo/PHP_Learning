<?php 
namespace Meals;
class Ingredient {
	private $name;
	private $cost;
	/**
	 * Constructor
	 * @param string $name, $cost
	 */
	public function __construct( $name, $cost ) {
		$this -> name = $name;
		$this -> cost = $cost;
	}
	/**
	 * Get the name of ingredient 
	 * @return string $name
	 */
	public function getName() {
		return $this -> name;
	}
	/**
	 * Get the cost of ingredient 
	 * @return string $cost
	 */
	public function getCost() {
		return $this -> cost;
	}
	/**
	 * Set value of $cost 
	 * @param string $cost
	 */
	public function setCost( $cost ) {
		$this -> cost = $cost;
	}
}
?>
