<!DOCTYPE html>
<html>
<head>
	<title>Show Data From Table</title>
</head>
<body>
	<center>
		<table border="1" class="showdata">
		<tr>
			<th>FirstName</th>
			<th>LastName</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Choose Subject</th>
			<th>Comment</th>
			<th>City</th>
			<th>Action</th>
		</tr>
		<?php
				include('db_connect.php');
				$query="SELECT * FROM `infotable` ";
				$result=mysqli_query($conn,$query);
				while ($row=mysqli_fetch_array($result)) {
					?>
				<tr>
					<td><?php echo $row['fname']?></td>
					<td><?php echo $row['lname']?></td>
					<td><?php echo $row['email']?></td>
					<td><?php echo $row['gender']?></td>
					<td><?php echo $row['subject']?></td>
					<td><?php echo $row['comment']?></td>
					<td><?php echo $row['city']?></td>
					<td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
						<a href="updatedata.php?id=<?php echo $row['id'];?>">Edit</a></td>
				</tr>
				<?php
				}
				?>
	</table>
	</center>

</body>
</html>