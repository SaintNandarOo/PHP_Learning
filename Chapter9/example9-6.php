<form action="example9-5.php" method="post">
	Flavor <input type="text" name="flavor"><br>
	Color <input type="text" name="color"><br>
	<?php
	$choices = array( 'Eggs','Toast','Coffee' );
	print "Choices<select name="choices"><br>";
	foreach ( $choices as $choice) { 
		print "<option>$choice</option><br>";
	}
	?>
	</select><br>
	Age <input type="text" name="age"><br>
	Price <input type="text" name="price"><br>
	Email <input type="email" name="email"><br>
	Temperature <input type="text" name="temperature"><br>
	Rating <input type="text" name="rating"><br>
	<input type="submit" name="OK">
</form>
