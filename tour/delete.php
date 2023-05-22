<?php
	session_start();
	$id = $_GET['id'];
 
	$tours = simplexml_load_file('files/tour.xml');
 
	//we're are going to create iterator to assign to each user
	$index = 0;
	$i = 0;
 
	foreach($tours->tour as $tour){
		if($tour->id == $id){
			$index = $i;
			break;
		}
		$i++;
	}
 
	unset($tours->tour[$index]);
	file_put_contents('files/tour.xml', $tours->asXML());
 
	$_SESSION['message'] = 'Deleted successfully';
	header('location: index.php');
 
?>