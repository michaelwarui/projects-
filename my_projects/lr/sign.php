<?php 
require_once("connection.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href ="mystyle.css">
	</head>
	<body>
	 <div class ="wrap">
		 <h1> Sign up here</h1>
		 
		 <form method="post">
		 
			 <input type="text" name="first_name" placeholder="firstname" required>
			 <p>
			 <input type="text" name="last_name" placeholder="lastname" required>
			 <p>
			 <input type="text" id="username" onkeyup="check_user()" name="username" placeholder="Username" required>
			 <div id="checking"></div>
			 <p>
			 <input type="email" name="email" placeholder="Email address" required>
			 <p>
			 <input type="password" name="password" placeholder="Password" id="myInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
			 title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
			 <p>
			 <input type="submit" class="submit" id="submit" value ="submit" name="submit">  
			 
		 </form>
		
	 </div>
	
		 <?php if(isset($_POST['submit'])){
			

			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$username = $_POST['username'];
			$email =$_POST['email'];
			$password = $_POST['password'];
			
			
			$q="INSERT INTO `users` (`user_id`,`first_name`, `last_name`, `username`, `email`, `password`) 
					VALUES ('','".$first_name."','".$last_name."','".$username."','".$email."','".$password."' )";
					
			$r= mysqli_query($con, $q) ;
			
			
			if ($r){
				echo"<SCRIPT>
				alert('You have successfully registered');
				</SCRIPT>";
			
				header("location:start.php");
			}
			else{
				echo"<SCRIPT>
				alert('Registretion failed');
				</SCRIPT>";
			}
		 }
		?>
		<script src="sub_file/jquery-3.4.1.min.js"></script>
		<script>
		document.getElementById("submit").disabled= true;
			function check_user(){
				
				
				var username = document.getElementById("username").value;
				
				// sends the data to user_check.php file
				$.post("sub_file/user_check.php",
				{
					user: username
				},
				// bring result to this function
				function(data, status){
					if (data=='<p style="color:red">Username alredy exists</p>'){
						document.getElementById("submit").disabled= true;
					}else{
						document.getElementById("submit").disabled= false;
					}
					
					document.getElementById("checking").innerHTML = data ;
				}
				);
			}
		</script>
		
		
		
		
		
		
	</body>
</html>