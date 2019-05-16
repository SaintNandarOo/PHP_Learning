<?php  
function html_img( $url, $alt = null, $height = null, $width = null ) { 
	$html = '<img src="' . $url . '" alt="' . $alt . '" height="' . $height . '" width="' . $width . '" />';
	return $html; 
}
echo html_img( 'pic.png', 'screenshot', '300px', '300px' );
echo html_img( 'pic.png' );
?>
