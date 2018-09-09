<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      function regist(){
       
     
         var x = new Array();

         x[0] = document.getElementById('name').value;
         x[1] = document.getElementById('email').value;
         x[2] = document.getElementById('password').value;
        console.log(x[1]);
         var e = new Array();
           e[0] = "<span style='color:red'>Please type your name!</span>";
           e[1] = "<span style='color:red'>Please type your email!</span>";
           e[2] = "<span style='color:red'>Please type your password!</span>";

          var divs = new Array('mname','memail','mpassword');
          for(i in x){

                if (x[i]=="") {
                    document.getElementById(divs[i]).innerHTML = e[i]; 
                }
                else{
                    document.getElementById(divs[i]).innerHTML="<span style='background-color: green;'>OK!</span>";
                }
          }
      }
      function dar(){
        var x =  document.getElementById('password');
        if (x.type=='password') {
            x.type = 'text';
        }else{

         x.type = 'password';
        }
      }
  </script>
</head>
<body style="background-color: grey;">
<?php 
        include("links.php");
        // include("login.php");
    ?>
<div class="container">
  <h2>Register</h2>
  <p>Register here for free! to acces PY_CORP</p>            
  <form method="POST" action="registerph.php" enctype="multipart/form-data">
  <table class="table table-hover">
  		<tr>
  			<th>Name</th><td><input autocomplete="username" type="text" name="name" id="name" onkeyup="regist()"></td><td><div id="mname"><span style='background-color: red;'>?</span></div></td></tr>
  			<tr><th>Email</th><td><input autocomplete="username"  type="text" name="email" id="email" onkeyup="regist()"></td><td><div id="memail"><span style='background-color: red;'>?</span></div></td></tr>
  		<tr>	<th>Password</th><td><input type="password" autocomplete="new-password" name="password" id="password" onkeyup="regist()"><input type="button" onclick="dar()" value="_+_"></td><td><div id="mpassword"><span style='background-color: red;'>?</span></div></td></tr>
      <tr>  <th colspan="2">Upload profile picture</th><td><input type="file" name="pic"></td></tr>
      
  		
  </table>
  <input type="submit" name="register" value="Register">
  </form>
</div>

</body>
</html>
