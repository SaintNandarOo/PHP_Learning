<?php 
function color( $red, $green, $blue ) {
	$hexa = dechex( $red ) . dechex( $green ) . dechex( $blue );
	return "#" . $hexa;
}
print color( 255, 56, 78 );
?>
