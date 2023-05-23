<?php
	
	include 'conn.php';


	if(isset($_POST['add'])){
		$ID = $_POST['id'];
		$TITLE = $_POST['title'];
		$AUTHOR = $_POST['author'];
		$DATE = $_POST['date'];
		$CONTENT = $_POST['content'];
		$IMAGE = $_FILES['image'];
		// print_r($_FILES['image']);
		$img_loc =$_FILES['image']['tmp_name'];
		$img_name = $_FILES['image']['name'];
		$img_destination = "files".$img_name;
		move_uploaded_file($img_loc,'files/'.$img_name);


		//insert data to database
		mysqli_query($con, "INSERT INTO `tour_table`(`id`, `title`, `author`, `date`, `content`, `image`) VALUES ('$ID','$TITLE','$AUTHOR','$DATE','$CONTENT','$img_destination')");
	}

	header('location: index.php');
?>