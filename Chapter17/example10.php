<?php
$image = ImageCreateFromPNG( '/Users/administrator/Documents/frame.png' );
$stamp = ImageCreateFromPNG( '/Users/administrator/Documents/sample.png' );
$margin = [ 'right' => 5, 'bottom' => 5 ]; // offset from the edge
ImageCopy( $image, $stamp, imagesx( $image ) - imagesx( $stamp ) - $margin['right'], imagesy( $image ) - imagesy( $stamp ) - $margin[ 'bottom' ], 0, 0, imagesx( $stamp ), imagesy( $stamp ) );
header( 'Content-type: image/png' );
ImagePNG( $image );
ImageDestroy( $image );
?>
