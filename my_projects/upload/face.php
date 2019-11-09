<html>
<head>
<link rel="stylesheet" href ="cover.css">
	<header>
	
		<a href="" class="logo">mike ltd</a>
			<nav>
				<ul>
				  <li><a href ="exp.html">Home</a></li>
				  <li><a href ="index.php">Bookings</a></li>
				  <li><a href ="face.php">Schedule</a></li>
				
				</ul>
			</nav>
	</header>
</head>
</html>
<?php
	require_once("connection.php");
		$q1='SELECT * FROM `schedule`';
		$r1=mysqli_query($con,$q1);
		if( $r1){
			while($row =mysqli_fetch_assoc($r1)){
			
				$title= $row['name'];
				$image= $row['image'];
				$trailer= $row['trailer'];
				$Date=$row['Date'];
				

				
				echo '<h3>'.$title. '</h3>';
				echo "<br>";
				
				echo "<div id='img_div'>";
				
				echo "<img src='images/".$row['image']."' >";
				
				echo "<br>";
				
				echo "<input type='submit' value='Watch trailer'
				href='img src= 'trailers/".$row['trailer']."' >";
				
				echo "</div>";
				
				echo "<br>";
					
				echo '<p>'.$Date.'</p>'; 
				
				echo "<br>";
				
				
			}
		}
?>
  