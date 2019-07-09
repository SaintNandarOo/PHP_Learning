<?php
// Create a new XMLReader object
$reader = new XMLReader(); 
// Load from a file or URL
$reader->open( 'book.xml' );
/* Loop through document */
while ( $reader->read () ) {
	/* If you're at an element named 'author' */
	if( $reader->nodeType == XMLREADER::ELEMENT && $reader->localName == 'book' ) {
		/* Process author element */
		$reader->moveToAttribute( 'isbn' );
		print $reader->value . '<br>';
	}
}
?>
