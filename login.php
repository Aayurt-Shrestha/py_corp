<?php
		if (!isset($_REQUEST['login'])) {
				echo "Access Denied";
				header("refresh:3; Location: home.php");
		}else
		{
				if ($_REQUEST['name'] && $_REQUEST['password']) {
						$user = $_REQUEST['name'];
						$pass = $_REQUEST['password'];

						$a = mysqli_connect("localhost","root","");
						mysqli_select_db($a,"py_corp");
						echo "SELECT * FROM ptable WHERE name=$user";
						$query = mysqli_query($a,"SELECT * FROM ptable WHERE name='$user'");
						$num = mysqli_num_rows($query);

						if ($num!=0) {
						 		while ($b = mysqli_fetch_assoc($query)) {
						 				$dbname = $b['name'];
						 				$dbpass = $b['password'];	
						 		}
						 		if ($dbname == $user) {
										if($dbpass == $pass){
												session_start();
												$_SESSION['name'] = $user;
												header("Location: welcome.php");



										}else{
												echo "Password don't match!";
												header("refresh:1 ;Location: home.php;");
										}				 		
						 		}else{
						 				echo "Username not found";
						 				header("refresh:1 ;Location: home.php;");
						 		}
						 } else{
						 	echo "No Record found";
						 }
							
				}
		}
	
?>
