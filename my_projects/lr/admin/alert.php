<html>
<head>
<style>
#navbar {
  overflow: hidden;
  background-color: #333;

}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 16px 100px;
  text-decoration: none;
  font-size: 16px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}
.header {
  background-color:white;
  padding: 20px;
  text-align: center;
}
.textarea{
	height:30%;
	width:90%;
}
	
</style>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<div class="header">
   <img src="farmlogo.jpg" height="180px" width="700px"/>
</div>
<div id="navbar">
 
  <a href="1st pageadmin.php">Alert</a>
  <a href="alert.php">Post alert</a>
	<a href="2nd pageadmin.php">Forums</a>
	<a href="posts.php">Posts from users</a>
	<a href="page4admin.php">About us</a>
	
	
        <div style="text-align:right;">
	       <a class="fa fa-sign-out" aria-hidden="true" href="logout.php">log out </a>  
		   </div>
	    </div>
		
<p>
	<form method ="post">
<textarea type ="text" class="textarea" name="message" placeholder="write alert here............."></textarea>
			<input type="submit"  name="submit"  value="post alert"/>
	</form>
	<?php
			require_once("connection.php");
			
		if (isset($_POST['submit'])){
			
			$alert_message=$_POST
			['message'];
			
			$q='INSERT INTO`alert`(`alert_id`,`alert_message`) VALUES("","'.$alert_message.'")';
			if (mysqli_query($con,$q)){
				
			echo "<SCRIPT>
			alert('alert posted');
			</SCRIPT>";

			}else{
				echo"<SCRIPT>
			alert('Error on posting');
			</SCRIPT>";

			}
		}
	
	?>			 

</body>
</html>

