<?php
	require_once("../connection.php");
	if(isset($_POST['user'])){
	
		$q='SELECT * FROM `users` WHERE `username`="'.$_POST['user'].'"';
		$r= mysqli_query($con, $q);
		if($r){
			if(mysqli_num_rows($r)>0){
				
				echo'<p style="color:red">Username already exists</p>';
			}else{
				 echo'<p style="color:green">Username is free</p>';
			}
		}else{
			echo $q;
		}	
	}
?>