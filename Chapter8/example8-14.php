<?php
print str_repeat( ' ', 300 );
print 'Finding identical snowflakes...';
flush();
$sth = $dbh -> query( 'SELECT shape,COUNT( * ) AS c FROM snowflakes GROUP BY shape HAVING c > 1');
?>
