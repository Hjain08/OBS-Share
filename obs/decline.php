<?php 
	include('conn.php');

	$id = $_GET['id'];

	$result = mysqli_query($con, "UPDATE `assignment1` SET `status` = 'Declined' WHERE `id`=$id ;");

	header("Location:display.php")
	
?>