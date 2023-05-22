<?php
	session_start();
	if(isset($_POST['add'])){
		//open xml file
		$tours = simplexml_load_file('files/tour.xml');

		$tour = $tours->addChild('tour');

		$tour->addChild('id', $_POST['id']);
		$tour->addChild('title', $_POST['title']);
		$tour->addChild('author', $_POST['author']);
		$tour->addChild('date', $_POST['date']);
		$tour->addChild('content', $_POST['content']);
		
		
		// Save to file
		// file_put_contents('files/members.xml', $tours->asXML());
		// Prettify / Format XML and save
		$dom = new DomDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($tours->asXML());
		$dom->save('files/tour.xml');
		// Prettify / Format XML and save
 
		$_SESSION['message'] = 'added successfully';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
		header('location: index.php');
	}
?>