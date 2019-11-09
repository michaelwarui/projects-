<?php 
require_once("connection.php");
?>
<html>
<head>
<link rel="stylesheet" href ="users/mystyle.css">
</head>
<body align="center">



<div class="wrap">
<h2> Forgot password?</h2>
<p>
<p>An email will be sent to you with instructions on how to recover your password</p>
<p>
<form method="post">

 <input type="email" name="email" placeholder="Email address" required>
<p>
<input type="submit" class="submit" value="send" name="send" />
</form>
</div>
<?php
			if (isset($_POST['send'])){
				
				$email =$_POST['email'];
				
				$q='SELECT * FROM `users` WHERE `email` ="'.$email.'" ';
					
				$r=mysqli_query($con, $q);
				
				if($r){
					
					if(mysqli_num_rows($r)>0){
						
						echo"<script>
							alert('message sent to your email');
							</script>";
						
					}else{
						 echo "<script>
							alert('Email you have inputted does not match any in the system');
							</script>";
						}
					}
				}
		
			 
		 
		 ?>
</body>
</html>