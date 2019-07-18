<?php
$options = array(
	'host' => 'ldap.example.com',
	'port' => '389',
	'base' => 'o=Example Inc., c=US',
	'userattr' => 'uid'
);
function pc_auth_ldap_signin() {
	$action = htmlentities( $_SERVER[ 'PHP_SELF' ] );
	print<<<_HTML_
	<form method="post" action="$action">
	Name: <input name="username" type="text"><br />
	Password: <input name="password" type="password"><br />
	<input type="submit" value="Sign In">
	</form>
_HTML_;
}
?>
