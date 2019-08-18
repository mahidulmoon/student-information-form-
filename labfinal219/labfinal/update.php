<?php
	include('db_connect.php');
	$id=$_POST['id'];
	$fname=$_POST['firstName'];
	$lname=$_POST['lastName'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$subject=$_POST['subject'];
	$comments=$_POST['comments'];
	$city=$_POST['city'];
	$query="UPDATE `infotable` SET `fname`='$fname',`lname`='$lname',`email`='$email',`gender`='$gender',`subject`='$subject',`comment`='$comments',`city`='$city' WHERE `id`= '$id'";
	if (mysqli_query($conn,$query)) {
		header("Location:showdata.php");
	}else{
		echo "Check the query and connection";
	}


?>