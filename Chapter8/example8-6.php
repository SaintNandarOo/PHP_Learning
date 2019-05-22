<?php
print<<<_HTML_
<form action="login.php" method="get">
<label for="email">Email (or) User ID</label><br> <input type="text" name="email" id="email"><br>
<label for="password">Password</label><br>
<input type="password" name="password" id="password"><br><br>
<input type="submit" value="Login">
</form>
_HTML_;
?>
