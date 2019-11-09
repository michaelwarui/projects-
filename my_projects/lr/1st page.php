
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--log out image-->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet"href ="mystyle.css">
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
	
        <div style="text-align:right;">
	       <a class="fa fa-sign-out" aria-hidden="true" href="logout.php">log out </a>  
		   </div>
	    </div>
		
		
  <!--start of forum structure layout-->
<div class="content">
  <div class="row">
  <div class="column" style="background-color:#aaa;">
  
    <?php
		require_once("connection.php");
	
		$q1='SELECT * FROM `alert`';
		$r1=mysqli_query($con,$q1);
		if( $r1){
	
			while($row =mysqli_fetch_assoc($r1)){
			?>

	</div>
			<div class="column" style="background-color:#bbb;">
				<h2>Alert</h2>
			<?php
				$alert_message= $row['alert_message'];
				echo '<p>'.$alert_message.'</p>';
			
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