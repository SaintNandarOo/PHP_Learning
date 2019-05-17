<?php  
namespace Tiny;
class Fruit {
	public static function munch ( $bite ) {
		echo "Here is a tiny munch of $bite.";
	}
}
//For the rest of this file, when I say Fruit as a class name, I really mean \Tiny\Fruit
use Tiny\Fruit;
// This calls \Tiny\Fruit::munch();
Fruit::munch( "orange" );
?>
