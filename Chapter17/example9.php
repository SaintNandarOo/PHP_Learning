<?php
include 'imagecenter.php';
$image = ImageCreateFromPNG( '/Users/administrator/Documents/button.png' );
// Template image
$color = 0x000000;
$text = 'Hello';
$font = $x = 1;
$y = 5;
list( $x ) = ImageStringCenter( $image, $text, $font );
ImageString( $image, $font, $x, $y, $text, $color );
// Preserve Transparency
ImageColorTransparent( $image, ImageColorAllocateAlpha( $image, 0, 0, 0, 127 ) );
ImageAlphaBlending( $image, false );
ImageSaveAlpha( $image, true );
// Send image
header( 'Content-type: image/png' );
ImagePNG( $image );
// Clean up
ImageDestroy( $image );
?>
