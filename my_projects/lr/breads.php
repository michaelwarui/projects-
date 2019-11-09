<?phpsession_start();
?>

<html>
<head>

</head>
<style>
	<?php require_once("mystyle.css");
	
	?>
	
</style>
<body>
 <div id="navbar" >
		
			<a href="1st dis.php">Livestock breads</a>
			<br>
</div>
			

<p>

<div id ="mess">
			<?php 		
				require_once("new-message.php");
				if(isset ($_SESSION['user_name'])){
				echo 'USERNAME active:' .$_SESSION['user_name'] ;
				
				}else

			?>
</div>
	<div id="container">
		<div id="left-col">
			<?php require_once("left-col.php");?>
	
		</div>
			<div id ="right-col">
				<?php require_once("right-breads.php");?>
				
			</div>
	</div>
	
</body>
</html>