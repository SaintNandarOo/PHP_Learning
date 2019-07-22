<?php
include 'imagecenter.php';
$width = 500;
$height = 100;
$image = ImageCreateTrueColor( $width, $height );
ImageFilledRectangle( $image, 0, 0, $width - 1, $height - 1, 0xFFFFFF );
$color = 0x000000;
$text = 'Pack my box with five dozen liquor jugs.';
for ( $font = 1, $y = 5; $font <= 5; $font ++, $y += 20 ) {
	list( $x ) = ImageStringCenter( $image, $text, $font );
	ImageString( $image, $font, $x, $y, $text, $color );
}
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
