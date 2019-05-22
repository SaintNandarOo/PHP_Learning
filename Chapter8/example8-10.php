<?php
ob_start();
echo "I haven't decided if I want to send a cookie yet.<br>";
setcookie( 'heron', 'great blue' );
echo "Yes, sending that cookie was the right decision.<br>";
//user home directory
print getenv( 'HOME' );
ob_end_flush();
?>
