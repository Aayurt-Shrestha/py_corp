<?php
    if(!isset($_GET['id'])){
    	echo "lol";
       
    }else{
    			$i = $_GET['id'];
     			$a = mysqli_connect("localhost","root","");
				mysqli_select_db($a,"py_corp");
                echo "<table border='1'>
    <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th></tr>
    </thead>";
				$query = mysqli_query($a,"SELECT * FROM ptable WHERE id=$i");
				while ($b = mysqli_fetch_assoc($query)) {
                        echo "<tr><td>".$b['id']."</td><td>".$b['name']."</td><td>".$b['email']."</td><td>".$b['password']."</td></tr>";
                }
                 echo "</table> <hr>";
    echo '<form method="POST" action="update2.php">
    <table border="1">
          <tr>
            <th>Name</th><td><input type="text" name="name"></td></tr>
            <tr><th>Email</th><td><input type="text" name="email"></td></tr>
          <tr>  <th>Password</th><td><input type="password" name="password"></td></tr>
    
    
          
      </table>
       <input type="submit" name="update" value="Update">
  </form>';
				
    }
?>