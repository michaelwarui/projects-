
<html>
<head>
<link rel="stylesheet" href ="cover.css">

</head>
<body>

<header>
	
		<a href="" class="logo">mike ltd</a>
			<nav>
				<ul>
				  <li><a href ="exp.html">Home</a></li>
				  <li><a href ="face.php">Bookings</a></li>
				  <li><a href ="schedule.html">Schedule</a></li>
				
				</ul>
			</nav>
		
	</header>
<br>
<div class="frame">
	<form method ="post" enctype="multipart/form-data">
		<label>Movie name :</label>
		<input type ="text" name="name">
		<p>
		<label>Upload movie poster</label>
		<input type="file" name="image" >
		<p>
		<label>Upload movie trailer</label>
		<input type="file" name="trailer" >
		<p>
		<label>Date </label>
		<input type="datetime-local" name="Date" >
		<p>
		<input type="submit" name="submit" >
	
	</form>

</div>
</body>
</html>
<?php


	if (isset($_POST['submit'])) {
		
		$target ="images/".basename($_FILES['image']['name']);
		$move ="trailers/".basename($_FILES['trailer']['name']);
		
		$db = mysqli_connect("localhost", "root", "", "movie");
		
		$title =$_POST['name'];
		$image =  $_FILES['image']['name'];
		$trailer =  $_FILES['trailer']['name'];
		$Date =  $_POST['Date'];
		
		$sqli='INSERT INTO`schedule`(`id`, `name`, `image`, `trailer`,`Date` ) 
		VALUES ( "","'.$title.'", "'.$image.'", "'.$trailer.'", "'.$Date.'" )';
		
		$p=mysqli_query($db, $sqli);
		
	if
	(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		$msg ="image uploaded succesfully";
	}
	if
	(move_uploaded_file($_FILES['trailer']['tmp_name'], $move)){
		$msg ="trailer  uploaded succesfully";
		
	}else{
		$msg ="error occured when uploading";
	}
	if 
		($p){
				echo"<SCRIPT>
				alert('Movie data succesfuly added');
				</SCRIPT>";
			}
			else{
				echo"<SCRIPT>
				alert('Error occured');
				</SCRIPT>";
			}
		 }
		 
		

?>

