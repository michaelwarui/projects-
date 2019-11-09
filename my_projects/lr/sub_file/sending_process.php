<?php
	session_start();
	require_once(" connection.php");
	if(isset($_SESSION['user_name'])and isset($_GET['user'])){
		if (isset($_POST['text'])){
		// checks for an empty messsage
		if($_POST['text'] !=''){
			//place data into the database
			
			$sender_name =$_SESSION['user_name'];
			$receiver_name =$_GET['user'];
			$message=$_POST['text'];
			$date= date("Y-m-d h:i:sa");
			
			$q='INSERT INTO `messages`(`id`, `sender_name`, `receiver_name`, `message_text`,`date_time`)
				VALUES("","'.$sender_name.'", "'.$receiver_name.'", "'.$message .'", "'.$date.'" )';
			$r= mysqli_query($con,$q);
			
			if($r){
			//message sent
?>
				<div class="message-1">
						<a href="#"><?php echo $receiver_name;?></a>
						<p><?php echo $message;?></p>
				</div>
<?php
			}else{
				
				echo $q;
			}
		}else{
			echo 'please write something first';
		}
		
		}else{
		echo'problem with text';
			}
	}
	

?>