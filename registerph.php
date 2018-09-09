<?php

		if(!isset($_POST['register'])){
				echo "Access denied";
				header("refresh: 3;location:home.php");
		}else{
				$name = $_POST['name'];
				$email = $_POST['email'];
				$password = $_POST['password'];

				if ($name && $email && $password)
				{
					
				
	     			$a = mysqli_connect("localhost","root","");
					mysqli_select_db($a,"py_corp");
					$query= mysqli_query($a,"SELECT * FROM ptable WHERE name='$name'");
					while ($b = mysqli_fetch_assoc($query)) 
					{
							$dbname = $b['name'];
					}
					if ($dbname == $name) {
						echo "Username exists!";
						header("refresh: 2; url= register.php");
				}else{
					
						$query = mysqli_query($a,"INSERT INTO ptable (name,email,password) VALUES ('$name','$email','$password')");
						
						
						$file = $_FILES['pic'];

						$filename = $_FILES['pic']['name'];

						$filetmp = $_FILES['pic']['tmp_name'];

						$filesize = $_FILES['pic']['size'];
						$fileerror = $_FILES['pic']['error'];
						$filetype = $_FILES['pic']['type'];

						$fileext = explode('.',$filename);

						$fileActext = strtolower(end($fileext));
						
						$allowed = array('jpg','jpeg','png','pdf');
						if (in_array($fileActext, $allowed)) {
								if ($fileerror ===0) {
										if ($filesize<100000) {
												
												$fileNameNew = "profile_".$_POST['name'].".".$fileActext;
												$dir = "profiles/".$_POST['name']."/images/";
												$dire = "profiles/".$_POST['name']."/images/$fileNameNew";
												if (file_exists($dire)) {
														echo "Sorry, file already exists.";
															 $uploadOk = 0;
												}else{
												// $dir = "profiles/".$_POST['name']."/images/".$fileNameNew;
													if (!file_exists($dir)) {
														mkdir($dir, 0777, true);
													}
													move_uploaded_file($filetmp, $dire);
													
													$query = mysqli_query($a,"UPDATE ptable SET img='$dire' WHERE name='$name'");

												}
										}else{
												echo "image above limit.Try again";
										}
								}else{
										echo "Error in uploading";
								}
						}else{
								echo "file not supported.. ie.jpg,jpeg,png";
						}

						
						
						
						echo "Registered";
					}
				}else{
					echo "Complete the registration";
					header("refresh:1 ;url=register.php");
					
				}	
				
		}


?>