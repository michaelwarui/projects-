
<div class="container">		
		
   <h3>Report user</h3>
   <form method ="post">
        <textarea type="text" name="message" id="message" class="area" placeholder="Username and content...."></textarea>
       <input type="submit"  name="submit"  value="Report"/>
	</form>
	<?php
							
							
						if (isset($_POST['submit'])){
							$sender_name = $_SESSION['user_name'];
							$report=$_POST['message'];
							$date = date("Y-m-d h:i:sa");
							$q='INSERT INTO`reports`(`report_id`,`sender_name`,`report`,`date_time`) VALUES("","'.$sender_name.'","'.$report.'","'.$date.'")';
							if (mysqli_query($con,$q)){
								
							echo "<SCRIPT>
							alert('report posted');
							</SCRIPT>";

							}else{
								echo"<SCRIPT>
							alert('Error on posting');
							</SCRIPT>";

							}
						}
					
					?>	
			
	<div>