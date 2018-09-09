<?php
		if (!isset($_POST['update'])) {
				echo "Access Denied";
		}else{
				
				$name = $_POST['name'];
				$email = $_POST['email'];
				$password = $_POST['password'];

				$a = mysqli_connect("localhost","root","");
				mysqli_select_db($a,"py_corp");
				$query = mysqli_query($a,"UPDATE ptable SET name='$name',email='$email',password='$password' ");
				echo "updated";
				// header("location: update1.php");
		}
?>