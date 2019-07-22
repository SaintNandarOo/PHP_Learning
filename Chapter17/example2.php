<?php
$width = 400;
$height = 50;
$image = ImageCreateTrueColor( $width, $height );
$background_color = 0xFFFFFF;
ImageFilledRectangle( $image, 0, 0, $width - 1, $height - 1, $background_color );
$x1 = $y1 = 0;
$x2 = $y2 = $height - 1;
$color = 0xCCCCCC;
ImageLine( $image, $x1, $y1, $x2, $y2, $color );
ImageRectangle( $image, $x1 + 50 , $y1, $x2 + 50, $y2, 0xDD00CA );
ImageFilledRectangle( $image, $x1 + 100 , $y1, $x2 + 100, $y2, $color );
$points = array( $x1 + 150, $y1, $x2 + 150, $y2 - 10, $x2 + 250 , $y2 );
ImagePolygon( $image, $points, count( $points ) / 2, 0x5DC0CF );
$points = array( $x1 + 250, $y1, $x2 + 250 , $y2 - 15, $x2 + 350, $y2 );
ImageFilledPolygon( $image, $points, count( $points ) / 2, $color );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
