<?php

	session_start();

	if(isset($_SESSION['uid']))
	{
		echo "";
	}
	else
	{
		header('location: ../login.php');
	}
?>

<?php
	include('header.php');
	include('titlehead.php');
	include('../dbcon.php');

	$sid = $_GET['sid'];

	$sql="SELECT * FROM `student` WHERE id='$sid'";
	$run=mysqli_query($con, $sql);

	$data=mysqli_fetch_assoc($run);

?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<th>Roll No</th>
			<td><input type="text" name="rollno" value="<?php echo $data['rollno']; ?>" placeholder="Enter Rollno" required></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" value="<?php echo $data['name']; ?>" placeholder="Enter Name" required></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" value="<?php echo $data['city']; ?>" placeholder="Enter City" required></td>
		</tr>
		<tr>
			<th>Parent Contact</th>
			<td><input type="text" name="pcon" value="<?php echo $data['pcont']; ?>" placeholder="Enter Pcon" required></td>
		</tr>
		<tr>
			<th>Standard</th>
			<td><input type="number" name="std" value="<?php echo $data['standard']; ?>" placeholder="Enter Standard" required></td>
		</tr>
		<tr>
			<th>Image</th>
			<td><input type="file" name="simg" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
			</td>
			<input type="submit" name="submit" value="Submit" />
		</tr>
	</table>
</form>