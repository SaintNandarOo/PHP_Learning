<?php
if( ! ( filter_has_var( INPUT_POST, 'flavor' ) && ( strlen( filter_input( INPUT_POST, 'flavor' ) ) >0 ) ) ) {
	print 'You must enter your favourite ice cream flavor.<br>';
}
if ( filter_has_var( INPUT_POST, 'color' ) && ( strlen( filter_input( INPUT_POST, 'color', FILTER_SANITIZE_STRING ) ) <5 ) ) {
	print 'Color must be more than 5 characters.<br>';
}
if ( ! ( filter_has_var( INPUT_POST, 'choices') && filter_input( INPUT_POST, 'choices', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY ) ) ) {
	print 'You must select some choices.<br>';
}
$age = filter_input( INPUT_POST, 'age', FILTER_VALIDATE_INT );
if ( $age === false ) {
	print 'Submitted age is invalid.<br>';
}
$price = filter_input( INPUT_POST, 'price', FILTER_VALIDATE_FLOAT );
if ( $price === false ) {
	print 'Submitted price is invalid.<br>';
}
$email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL );
if ( $email === false ) {
	print 'Submitted email address is invalid.<br>';
}
if ( ! preg_match( '/^-?\d*\.?\d+$/', $_POST['temperature'] ) ) {
	print 'Your temperature must be a number.<br>';
}
if ( ! preg_match( '/^-?\d+$/', $_POST['rating'] ) ) {
	print 'Your rating must be an integer.<br>';
}
?>
