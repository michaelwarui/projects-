<?php
		require_once("connection.php");
		session_start();

	
		$sender_name = $_SESSION ['user_name'];
		$message = $_POST['message'];
		$date = date("Y-m-d h:i:sa");
		
		$q='INSERT INTO `messages`(`id`, `sender_name`, `message_text`,`date_time`)
			VALUES("","'.$sender_name.'", "'.$message .'", "'.$date.'" )';
		$r=$con->query($q);
			
		header("location:dis.php");
		
  
?>