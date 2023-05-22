<?php
	session_start();
	if(isset($_POST['edit'])){
		$tours = simplexml_load_file('files/tour.xml');
		foreach($tours->tour as $tour){
			if($tour->id == $_POST['id']){
				$tour->title = $_POST['title'];
				$tour->author = $_POST['author'];
				$tour->date = $_POST['date'];
				$tour->content = $_POST['content'];
				break;
			}
		}
 
		file_put_contents('files/tour.xml', $tours->asXML());
		$_SESSION['message'] = 'Member updated successfully';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Select member to edit first';
		header('location: index.php');
	}
 
?>