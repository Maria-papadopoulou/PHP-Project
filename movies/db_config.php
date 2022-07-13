
<?php
$server="localhost";
		$user="root";
		$password="";
		$db="video";
		
		$conn=mysqli_connect($server,$user,$password,$db);
		mysqli_set_charset($conn,"utf-8");
		if(!$conn){
			
			die("Κάτι πήγε στραβά!!!");
		}
		
		?>