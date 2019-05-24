<?php
header( 'Content-Type: application/json' );
header( 'WWW-Authenticate: Basic realm="http://google.com/"' );
header( 'WWW-Authenticate: OAuth realm="http://server.example.com/"', true );
header( 'Location: http://www.google.com' );
exit();
?>
