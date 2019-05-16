<?php
function html_img( $file, $alt = null, $height = null, $width = null ) { 
	$file = $GLOBALS['image_path'] . $file;
	$html = '<img src="' . $file . '" alt="' . $alt . '" height="' . $height . '" width="' . $width . '" />';
	return $html;
}
$image_path = 'image/';
echo html_img( 'pic1.png', 'screenshot', '300px', '300px' );
echo html_img( 'pic1.png' );
?>
