<?php
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
$headers = getallheaders();
echo $headers['User-Agent'];
?>
