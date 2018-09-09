<?php
    if(!isset($_GET['id'])){
    	echo "lol";
       
    }else{
    			$i = $_GET['id'];
     			$a = mysqli_connect("localhost","root","");
				mysqli_select_db($a,"py_corp");
				$query = mysqli_query($a,"DELETE * FROM ptable WHERE id=$i");
				header("location: delete.php");	
				
    }
?>