<?php
$http_error_code = 401;
$error_body = [
	"error" => "Unauthorized",
	"code" => 1,
	"message" => "Only authenticated users can read " . $_SERVER[ 'REQUEST_URI' ],
	"url" => "http://localhost.testing.com/Chapter15/example2"
];
http_response_code( $http_error_code );
print json_encode( $error_body );
?>
