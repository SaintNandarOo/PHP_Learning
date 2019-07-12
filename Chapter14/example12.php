<?php
class HeaderSaver {
	public $headers = array();
	public $code = null;
	/**
	 * Accumulate response headers
	 * @param string $curl, $data
	 * @return int
	 */
	public function header( $curl, $data ) {
		if ( is_null( $this->code ) && preg_match( '@^HTTP/\d\.\d (\d+) @', $data, $matches ) ) {
			$this->code = $matches[1];
		} else {
			// Remove the trailing newline
			$trimmed = rtrim( $data );
			if ( strlen( $trimmed ) ) {
				if ( ( $trimmed[0] == ' ' ) || ( $trimmed[0] == "\t" ) ) {
					// Collapse the leading whitespace into one space
					$trimmed = preg_replace( '@^[ \t]+@', ' ', $trimmed );
					$this->headers[ count( $this->headers )-1 ] .= $trimmed;
				}
				// Otherwise, it's a new header
				else {
					$this->headers[] = $trimmed;
				}
			}
		}
		return strlen( $data );
	}
}
$h = new HeaderSaver();
$c = curl_init( 'http://www.example.com/plankton.php' );
// Register the header function
curl_setopt( $c, CURLOPT_HEADERFUNCTION, array( $h, 'header' ) );
curl_setopt( $c, CURLOPT_RETURNTRANSFER, true );
$page = curl_exec( $c );
// Now $h is populated with data
print 'The response code was: ' . $h->code . '<br>';
print 'The response headers were: <br>';
foreach ( $h->headers as $header ) {
	print $header . '<br>';
}
?>
