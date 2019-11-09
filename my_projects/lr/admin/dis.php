<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous">
  </script>
</head>
<style>
	<?php require_once("mystyle.css");
	
	?>
	
</style>
<body>
 <div id="navbar" >
		
			<a href="1st dis.php">Livestock diseases</a>
			<br>
</div>
			

<p>

<div id ="mess">
			<?php 
				session_start();
				
				require_once("new-message.php");
				
				if(isset ($_SESSION['user_name'])){
				echo 'USERNAME ACTIVE:' .$_SESSION['user_name'] ;
				
				}else

			?>
</div>
	<div id="container">
		<div id="left-col">
			<?php require_once("left-col.php");?>
	
		</div>
			<div id ="right-col">
				<?php require_once("right-col.php");?>
				
			</div>
	</div>
	
	
</body>
</html>