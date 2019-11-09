<div id ="right-col-container">
		<div id ="message-container">
	<?php
		$q1='SELECT * FROM `messages`';
		$r1=mysqli_query($con,$q1);
		if( $r1){
			while($row =mysqli_fetch_assoc($r1)){
			
				$message= $row['message_text'];
				$sender_name= $row['sender_name'];
	
				
				echo'<h3 style="color:red"  >'.$sender_name.'</h3>';
				echo '<p>'.$message.'</p>';
				echo'<hr >';
			}
		}
?>

<?php
			
		if (isset($_POST['submit'])){
			$message=$_POST['message'];
			$date = date("Y-m-d h:i:sa");
			$q='INSERT INTO`messages`(`id`, `sender_name`, `message_text`,`date_time`) VALUES("","'.$_SESSION['user_name'].'","'.$message.'","'.$date.'")';
			if (mysqli_query($con,$q)){
				
				echo '<h3 style="color:red">'.$_SESSION['user_name'].'</h3>';
				echo '<p>'.$message.'</p>';
				echo '<hr>';
				echo"<br>";
			
			}
		}
	
	?>	
	</div>
				
		
		<form method ="post">
			

<textarea type ="text" class="textarea" name="message" placeholder="write your message....and press enter to post..."></textarea>
			<p align="right">
			<i class="fa fa-paper-plane" aria-hidden="true"></i><input type="submit"  name="submit"  value="message"/>
			 
			  </p>
		</form>
		
	
</div>

