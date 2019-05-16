<?php 
function page_header2( $color ) {
	print '<html><head><title>Welcome to my site</title></head>'; 
	print '<body bgcolor="#' . $color . '">';
}
page_header2( 'cc00cc' );
function page_header3( $color = '0000bb' ) {
	print '<html><head><title>Welcome to my site</title></head>'; 
	print '<body bgcolor="#' . $color . '">';
}
page_header3();
?>
