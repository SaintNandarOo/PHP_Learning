<?php
/**
 * Validating user an password
 * @param string $user, $pass
 */
function validate( $user, $pass ) {
	$users = array( 
		'admin' => '12345',
		'user1' => 'user1',
		'user2' => 'pass'
	);
	if ( isset( $users[ $user ] ) && ( $users[ $user ] === $pass) ) {
		return true;
	} else {
	return false;
	}
}
if ( ! validate( $_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'] ) ) {
	http_response_code( 401 );
	header('WWW-Authenticate: Basic realm="My Website"');
	echo 'You need to enter a valid username and password.';
	exit;
}
?>
