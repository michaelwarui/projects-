<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--log out image-->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		
<h1> livestock diseases 
<div class ="pullright">
<a class="btn btn-primary themeButtton" href="1st dis.php">start discussion</a>
</div>
</h1>


		<table class="forum table">
			<thead>
				<th>
					Discussion
				</th>	
				<th>
					Author
				</th>
				<th>
					Replies
				</th>
			</thead>
				<tr class="forumModule">
				<td>
						Cows
				</td>
				<td>
						mike
				</td>
				<td>
						21
				</td>
				</tr>
				
				<tr class="forumModule">
				<td>
						Chicken and poultry
				</td>
				<td>
						mike
				</td>
				<td>
						6
				</td>
				</tr>
				
				<tr class="forumModule">
				<td>
						Goats and sheep
				</td>
				<td>
						mike
				</td>
				<td>
						6
				</td>
				</tr>
			
				<tr class="forumModule">
				<td>
						Rabbits
				</td>
				<td>
						mike
				</td>
				<td>
						6
				</td>
				</tr>
			
	   </div>
	 
	   </table>

<h1> livestock breads 
<div class ="pullright">
<a class="btn btn-primary themeButtton" href="livestock breads.php">start discussion</a>
</div>
</h1>
		
		<table class="forum table">
			<thead>
				<th>
					Discussion
				</th>	
				<th>
					Author
				</th>
				<th>
					Replies
				</th>
			</thead>
				<tr class="forumModule">
				<td>
						Cows
				</td>
				<td>
						mike
				</td>
				<td>
						21
				</td>
				</tr>
				
				<tr class="forumModule">
				<td>
						Chicken and poultry
				</td>
				<td>
						mike
				</td>
				<td>
						6
				</td>
				</tr>
				
				<tr class="forumModule">
				<td>
						Goats and sheep
				</td>
				<td>
						mike
				</td>
				<td>
						6
				</td>
				</tr>
			
				<tr class="forumModule">
				<td>
						Rabbits
				</td>
				<td>
						mike
				</td>
				<td>
						6
				</td>
				</tr>
	   
	 
	   </table>
<h1> livestock feeds 
<div class ="pullright">
<a class="btn btn-primary themeButtton" href="livestock feeds.php">start discussion</a>
</div>
</h1>
		
		<table class="forum table">
			<thead>
				<th>
					Discussion
				</th>	
				<th>
					Author
				</th>
				<th>
					Replies
				</th>
			</thead>
				<tr class="forumModule">
				<td>
						Cows
				</td>
				<td>
						mike
				</td>
				<td>
						21
				</td>
				</tr>
				
				<tr class="forumModule">
				<td>
						Chicken and poultry
				</td>
				<td>
						mike
				</td>
				<td>
						6
				</td>
				</tr>
				
				<tr class="forumModule">
				<td>
						Goats and sheep
				</td>
				<td>
						mike
				</td>
				<td>
						6
				</td>
				</tr>
			
				<tr class="forumModule">
				<td>
						Rabbits
				</td>
				<td>
						mike
				</td>
				<td>
						6
				</td>
				</tr>
			
	 
	 
	   </table>
<h1> livestock up keep 
<div class ="pullright">
<a class="btn btn-primary themeButtton" href="livestock upkeep.php">start discussion</a>
</div>
</h1>
		<div id="discussion_1" style= "dispaly:none">
		
		<table class="forum table">
			<thead>
				<th>
					Discussion
				</th>	
				<th>
					Author
				</th>
				<th>
					Replies
				</th>
			</thead>
				<tr class="forumModule">
				<td>
						Cows
				</td>
				<td>
						mike
				</td>
				<td>
						21
				</td>
				</tr>
				
				<tr class="forumModule">
				<td>
						Chicken and poultry
				</td>
				<td>
						mike
				</td>
				<td>
						6
				</td>
				</tr>
				
				<tr class="forumModule">
				<td>
						Goats and sheep
				</td>
				<td>
						mike
				</td>
				<td>
						6
				</td>
				</tr>
				
				<tr class="forumModule">
				<td>
						Rabbits
				</td>
				<td>
						mike
				</td>
				<td>
						6
				</td>
				</tr>
			
			
	   </div>
	 
	   </table>
	 

<br>   
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
<script src="themes/default/js" type="text/javascript"></script>
</html>