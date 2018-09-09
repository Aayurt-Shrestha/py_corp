<?php
	
	if (!isset($_SESSION['name'])) {
		echo "You must be logged in!";
	}else{
			
		 $a = mysqli_connect("localhost","root","");
		 mysqli_select_db($a,"py_corp");
		 $name = $_SESSION['name'];
		 
		 $query = mysqli_query($a,"SELECT * FROM ptable WHERE name='$name'");
		 while ($b= mysqli_fetch_assoc($query)) {
				$img = $b['img'];
		 }
		 if (!($img)) {
		 		echo "<img src='profiles/default/default.png' width='30px' height='30px'>";
		 }else{

		echo "<img src='$img' width='30px' height='30px'>";
		}
		echo $_SESSION['name']."'s session started";

		echo "&nbsp&nbsp&nbsp<a href='logout.php' style='color: silver'>Logout?</a>";
		echo "<br>";
	}
?>