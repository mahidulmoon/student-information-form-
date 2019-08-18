<?php
	include('db_connect.php');
	$fname=$_POST['firstName'];
	$lname=$_POST['lastName'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$subject=$_POST['subject'];
	$comments=$_POST['comments'];
	$city=$_POST['city'];
	$query="INSERT INTO `infotable`(`id`, `fname`, `lname`, `email`, `gender`, `subject`, `comment`, `city`) VALUES (NULL,'$fname','$lname','$email','$gender','$subject','$comments','$city')";
	if (mysqli_query($conn,$query)) {
		header("Location:index.php");
	}else{
		echo "Check the query and connection";
	}


?>