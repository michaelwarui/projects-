<?php
	session_start();
	if(isset ($_SESSION['user_name'])){
		
	echo 'welcome to the farmers forum ' .$_SESSION['user_name'] ;
	echo '<a href ="1st page.php">Enter forum</a>';
	}else{
		header("location:start.php");
	}

?>