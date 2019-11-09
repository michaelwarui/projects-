
<?php
	session_start();
	require_once("connection.php");
?>
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--log out image-->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href ="mystyle.css">
</head>
<body>
  <div class="header">
   <img src="farmlogo.jpg" height="180px" width="700px"/>
</div>

<div id="navbar">
  
  <a href="1st page.php">Alert</a>
	<a href="2nd page.php">Forums</a>
	<a href="3rd page.php">Talk to admin</a>
	<a href="page4.php">About us</a>

        <div class="col-lg-13 text-left">
	       <a class="fa fa-sign-out" aria-hidden="true"href="logout.php">log out</a>  
		   </div>
	     </div>
  <!--start of forum structure layout-->
  
    <div class="content">
<div class="container">
   <h3>Ask question ?</h3>
   <form method="post">
        <textarea type ="text" name="questions" class="area" placeholder="Write your question here.." ></textarea>
      <input type="submit"  name="question"  value="Post question"/>
		
		<p>
	</form>
	
					<?php
						if (isset($_POST['question'])){
							$sender_name = 
							$_SESSION
							['user_name'];
							$question=$_POST['questions'];
							$date = date("Y-m-d h:i:sa");
							$q='INSERT INTO`questions`(`question_id`,`sender_name`,`question_text`,`date_time`) VALUES("","'.$sender_name.'","'.$question.'","'.$date.'")';
							if (mysqli_query($con,$q)){
								
							echo "<SCRIPT>
							alert('question posted');
							</SCRIPT>";

							}else{
								echo"<SCRIPT>
							alert('Error on posting');
							</SCRIPT>";

							}
						}
					
					?>
					
</div>			

<div id ="reports">
				<?php require_once("reports.php");?>
				
			</div>



	

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