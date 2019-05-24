<?php
$version = ( isset( $_SERVER['SITE_VERSION']) ? $_SERVER['SITE_VERSION'] : 'guest' );
if ( 'members' == $version ) {
	if ( ! authenticate_user( $_POST['username'], $_POST['password'] ) ) {
		header( 'Location: http://www.google.com/' );
		exit;
	}
}
include_once '${version}_header';// load custom header
?>
