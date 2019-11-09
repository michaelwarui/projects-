<div id ="left-col-container">
		<div onclick="document.getElementById('new-message').style.display='block'">
		<p align="center">private messsage</p>
		</div>
		<div class="grey-back">
		
	<?php
		$q1='SELECT * FROM `users`';
		$r1=mysqli_query($con,$q1);
		if( $r1){
			while($row =mysqli_fetch_assoc($r1)){
			?>
			<img src="images/profile.png" class= "image"/>
			<?php
				
				$username= $row['username'];
				echo'<h3>'.$username.'</h3>';
				echo'<hr>';
				echo"<br>";
			}
		}
	?>
</div>
</div>
		