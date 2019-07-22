<?php
$size = 300;
$image = ImageCreateTrueColor( $size, $size );
$black = 0x000000;
$white = 0xFFFFFF;
$style = array( $black, $white, $black, $white );
ImageSetStyle( $image, $style );
ImageLine( $image, 0, 0, 50, 50, IMG_COLOR_STYLED );
ImageFilledRectangle( $image, 50, 50, 100, 100, IMG_COLOR_STYLED );
$style1 = array( $black, $black, $white, $white );
ImageSetStyle( $image, $style1 );
ImageLine( $image, 300, 300, 250, 250, IMG_COLOR_STYLED );
ImageFilledRectangle( $image, 200, 200, 250, 250, IMG_COLOR_STYLED );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
