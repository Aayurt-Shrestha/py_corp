<?php
 session_start(); 
include("session.php");
?>
<!DOCTYPE html>

	
	
	<html lang="en">
<head>
  <title>welcome to pycorp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: grey; color: snow;">

		<?php
				if (!$_SESSION['name']) {
						echo "NOT LOGED IN!";
				}else{

				include("links.php");
				// include("login.php");
					
				}
		?>
		<h1 align="center">Welcome To PYcorp</h1>
</body>
