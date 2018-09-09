<!DOCTYPE html>
<html>
<head>
	<title>PyCORPORATION</title>
	<style type="text/css">
			
	</style>
</head>
<body style="background-color: grey;">
		<?php 
				include("links.php");
				// include("login.php");
		?>
		<h1>HOME</h1>
		<form method="POST" action="login.php">
			Name:<input type="text" name="name" placeholder="type your name here!">
			Password:<input type="password" name="password" placeholder="type your Password here!"><input type="submit" name="login" value="Login">
		</form>
</body>
</html>