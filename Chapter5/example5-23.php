<?php
$dinner = 'Curry Cuttlefish';
function vegetarian_dinner() { 
	global $dinner;
	print "Dinner was $dinner, but now it's "; 
	$dinner = 'Sauteed Pea Shoots';
	print $dinner;
	print "<br>";
}
print "Regular Dinner is $dinner.<br>"; 
vegetarian_dinner();
print "Regular dinner is $dinner"; 
?>
