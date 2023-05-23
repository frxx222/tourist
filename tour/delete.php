<?php
	include 'conn.php';

	$ID = $_GET['id'];
	mysqli_query($con, "DELETE FROM `tour_table` WHERE id = $ID");
	$_SESSION['message'] = 'Deleted successfully';
	header('location: index.php');
 
?>