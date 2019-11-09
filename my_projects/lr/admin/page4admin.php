<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--log out image-->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet"href ="mystyle1.css">
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
  <div class="row">
	<div class="column" style="background-color:#aaa;">
		<h3>About us</h3>
    <p>
	This forum system is aimed at providing knowledge to both existing and new farmers regarding various issues such as best livestock breeds to keep, some of the livestock diseases affecting different animals, best livestock feeds to give to your animals to best boost their outputs as well as well as the best conditions to keep your livestock animals.</p>
<p>This forum system also provides a platform for the registered parties to be able to easily ask questions regarding livestock farming to the administrator who will able to easily provide responses to the best of his ability.
</p>
	</div>

	<div class="column" style="background-color:#bbb;">
	<h3>Contacts</h3>
	<p>For more information you can contact us</p> <p>0717-264-933 or 0711-222-333</p>
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