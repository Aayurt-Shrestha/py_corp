<?php
session_start();
if(!isset($_SESSION['name']))
  {
    echo "erro";
    header("location: home.php");
  }else{
    include("session.php");
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UPDATE of database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: grey; color: snow;">
<?php 
        include("links.php");
        // include("login.php");
    ?>
<div class="container">
  <h1 align="center">UPDATE OF DATABASE</h1> 
  <hr>
  <table class="table table-hover">
    <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th></tr>
    </thead>
    <?php

        $a = mysqli_connect("localhost","root","");
        mysqli_select_db($a,"py_corp");
        $query = mysqli_query($a,"SELECT * FROM ptable");
        while ($b = mysqli_fetch_assoc($query)) {
            echo "<tr><td><a style='color:red;' href='update1.php?id=".$b['id']."'>".$b['id']."</a></td><td>".$b['name']."</td><td>".$b['email']."</td><td>".$b['password']."</td></tr>";
        }
    ?>
  </table>        
 
</div>

</body>
</html>
