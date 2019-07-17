<?php
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'PUT' ) {
	$body = file_get_contents( 'php://input' );
	switch ( strtolower( $_SERVER[ 'HTTP_CONTENT_TYPE' ] ) ) {
		case "application/json":
			$job = json_decode( $body );
			break;
		case "text/xml": // parsing here
			break;
	}
	// Validate input
	// Create new Resource
	$request = explode( '/', substr( $_SERVER[ 'PATH_INFO' ], 1 ) );
	$resource = array_shift( $request );
	$id = create( $job, $request[0] );
	// Uses id from request
	$json = json_encode( array( 'id' => $id ) );
	http_response_code( 201 ); // Created
	$site = 'https://api.example.com';
	header( "Location: $site/" . $_SERVER[ 'REQUEST_URI' ] );
	print $json;
}
?>
