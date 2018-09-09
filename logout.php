<?php
	session_start();
		if (!isset($_SESSION['name'])) {
			echo "You r not logged in!";
		}else
		{
			session_start();
			session_destroy();
			header('location: home.php');
		}
?>