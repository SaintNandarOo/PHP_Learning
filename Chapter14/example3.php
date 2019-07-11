<?php
class PageSaver { 
	protected $db;
	protected $page ='';
	public function __construct() {
		$servername = "localhost";
		$username = "root";
		$password = "pwdpwd";
		$dbname = "testing";
		$this->db = new PDO( "mysql:host=$servername; dbname=$dbname", $username, $password );
		$this->db->exec( "CREATE TABLE pages (
			id INT UNSIGNED NOT NULL,
			url CHAR(255),
			page CHAR(255),
			PRIMARY KEY(id) )"
		);
	}
	public function write( $curl, $data ) {
		$this->page .= $data;
		return strlen( $data );
	}
	public function save( $curl ) {
		$info = curl_getinfo( $curl );
		$st = $this->db->prepare( "INSERT INTO pages ( url, page ) VALUES ( ?, ? )" );
		$st->execute( array( $info[ 'url' ], $this->page ) );
	} 
}
// Create the saver instance
$pageSaver = new PageSaver();
// Create the cURL resources
$c = curl_init( 'http://www.example.com/' );
// Set the write function
curl_setopt( $c, CURLOPT_WRITEFUNCTION, array( $pageSaver, 'write' ) );
// Execute the request
curl_exec( $c );
// Save the accumulated data
$pageSaver->save( $c );
?>
