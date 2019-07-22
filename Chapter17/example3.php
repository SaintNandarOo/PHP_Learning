<?php
$size = 100;
$image = ImageCreateTrueColor( $size, $size );
$background_color = 0xFFFFFF;
ImageFilledRectangle( $image, 0, 0, $size - 1, $size - 1, $background_color );
// three points for right triangle 
$x1 = $y1 = 10;
$x2 = $y2 = $size - 10;
$x3 = 10;
$y3 = $size - 10;
$color = 0x3DC0CF;
$points = array( $x1, $y1, $x2, $y2, $x3, $y3 );
ImagePolygon( $image, $points, count( $points ) / 2, $color );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
