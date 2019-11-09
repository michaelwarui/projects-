
<?php
	require_once("connection.php");
?>
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--log out image-->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href ="mystyle1.css">




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
		
  <!--start of forum structure layout-->
  
    <div class="content">
<div class="container">
   <h3>Ask question ?</h3>
   <form method="post">
        <textarea type ="text" name="questions" class="area" placeholder="Write your question here.." ></textarea>
      <input type="submit"  name="submit"  value="Post question"/>
		
		<p>
	</form>
	
					<?php
						
							 session_start();
						if (isset($_POST['submit'])){
							$sender_name = 
							$_SESSION
							['user_name'];
							$question=$_POST['questions'];
							$date = date("Y-m-d h:i:sa");
							$q='INSERT INTO`questions`(`question_id`,`sender_name`,`question_text`,`date_time`) VALUES("","'.$sender_name.'","'.$question.'","'.$date.'")';
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
   <h3>Report user</h3>
   <form method ="post">
        <textarea type="text" name="message" id="message" class="area" placeholder="Username and content...."></textarea>
       <input type="submit"  name="submit"  value="Report"/>
	</form>
	<?php
							
							
						if (isset($_POST['submit'])){
							
							$report=
							$_POST[
							'message'
							];
							$date = date("Y-m-d h:i:sa");
							$q='INSERT INTO`reports`(`report_id`,`report`,`date_time`) VALUES("","'.$report.'","'.$date.'")';
							if (mysqli_query($con,$q)){
								
							echo "<SCRIPT>
							alert('report posted');
							</SCRIPT>";

							}else{
								echo"<SCRIPT>
							alert('Error on posting');
							</SCRIPT>";

							}
						}
					
					?>			 
	
	
     
</div>
</div>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>

</html>