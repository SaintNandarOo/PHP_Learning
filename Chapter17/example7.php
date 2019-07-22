<?php
$image = ImageCreateTrueColor( 200, 50 );
ImageFilledRectangle( $image, 0, 0, 199, 49, 0xFFFFFF );
$x = 20;
$y = 35;
$text_color = 0x000000;
$text = 'Hello PHP!';
ImageString( $image, 1, $x, $y, $text, $text_color );
ImagePNG( $image, '/Users/administrator/Documents/image1.png' );
ImageDestroy( $image );
?>
