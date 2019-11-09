<div id ="new-message">
	<p class="m-header"> new message </p>
	<p class="m-body"> 
		<form method="post">
		
		<input type="text" list="user" onkeyup="check_in_db()" placeholder="username" name="username" id="username"/>
			<datalist id= "user" ></datalist>
			<br><br>
			
		<textarea class="message_area" name="message" placeholder="write your message"required></textarea><br>
		
		<input type="submit" value="send" id="send" name="send"/>
		<button onclick="document.getElementById('new-message').style.display='none'"> cancel</button>
		</form>
	</p>
	<p class="m-footer">click send to post message</p>
</div>
<?php

		require_once("connection.php");
	
		if(isset($_POST['send'])){
		$sender_name = $_SESSION['user_name'];
		$receiver_name=$_POST['username'];
		$message = $_POST['message'];
		$date = date("Y-m-d h:i:sa");
		
		$q='INSERT INTO `messages`(`id`, `sender_name`,`receiver_name`, `message_text`,`date_time`)
			VALUES("","'.$sender_name.'","'.$receiver_name.'", "'.$message .'", "'.$date.'" )';
		$r= mysqli_query($con,$q);
		if($r){
			//message sent
			echo "<script> alert('message sent');
			  </script>";
			
			  
		}else{
			//query problem
			echo" <script> alert ('message not sent');
			</script>";
		}
	}
  
?>
<script src="sub_file/jquery-3.4.1.min.js"></script>
<script>
//disable send button on refresh
	document.getElementById('send').disabled =true;	
 
	function check_in_db(){
		var username=document.getElementById("username"). value;
		
		$.post("sub_file/check_in_db.php",
		{
			user:username
		},
		
	   function(data, status){
			//alert(data);
			if(data== '<option value=" no user">'){
				//if user is registered activate send button
			document.getElementById('send').disabled =true;
			}else{
				//send button will not be active
			document.getElementById('send').disabled =false;	
			
			}document.getElementById('user').innerHTML=data;	
			}
		);
	}
</script>