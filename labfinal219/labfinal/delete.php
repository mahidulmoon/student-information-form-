<?php
	include('db_connect.php');
	$id=$_REQUEST['id'];
	$query="DELETE FROM `infotable` WHERE `id`='$id'";
	if (mysqli_query($conn,$query)) {
		header("Location:showdata.php");
	}else{
		echo "Check the query and connection";
	}
?>