<?php
$size = 500;
$image = ImageCreateTrueColor( $size, $size );
$background_color = 0xFFFFFF;
ImageFilledRectangle( $image, 0, 0, $size - 1, $size - 1, $background_color );
$x = $y = 250;
$width = $height = $size - 200;
$start = 0;
$end = 300;
$color = 0x3DC0CF;
ImageArc( $image, $x, $y + 40 , $width, $height, $start, $end, 0x7A8690 );
ImageEllipse( $image, $x, $y, $width - 50, $height, $color );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
