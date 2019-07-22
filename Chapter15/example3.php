<?php
http_response_code(503);
// Site down
$error_body = [
	"error" => "Down for maintenance",
	"code" => 2,
	"message" => "Check back in two hours.",
	"url" => "http://localhost.testing.com/Chapter15/example3"
];
print json_encode( $error_body );
?>
