
<?php
// session_start();
include('config.php');
//$email=$_SESSION['email'];
$query=mysqli_query($con,"select * from userdata ");
//$row2=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>SHOW DATA</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		tr{text-align: center;font-size: 16px;}
	</style>
</head>
<body>	
	<center>
		<h1><u>STUDENT'S DETAILS</u></h1><br>
		<table border="2"  class="table table-hover">
			<tr>
				<td>Sl_no</td>
				<td>FULL NAME</td>
				<td>MOBILE NUMBER</td>
				<td>E-MAIL ID</td>
				<td>PASSWORD</td>
				<td>DATE OF BIRTH</td>
				<td>QUALIFICATION</td>
				<td>PHOTO</td>
				<td>GENDER</td>
				<td>HOBBIES</td>
				<td>ACTION</td>
			</tr>
			<?php
			$c=1;
			while($row=mysqli_fetch_assoc($query))
			{
				?>
			<tr>
					<td><?php echo $c; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['mob']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['pwd']; ?></td>
					<td><?php echo $row['dob']; ?></td>
					<td><?php echo $row['qualification']; ?></td>
					<td style="text-align: center;">
						

						<img src="uploads/<?php echo $row['photo']; ?>" width="200px" alt="candidate's photo"><br><br>
						<a href="uploads/<?php echo $row['photo'];?>"><button class="btn btn-success">DOWNLOAD</button></a></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['hobbies']; ?></td>

					<td>
						<a href="edit.php?id=<?php echo $row['id'];?>"><button class="btn btn-info">Edit</button></a>



						&nbsp;&nbsp;
<a href="delete.php?id=<?php echo $row['id'];?>"><button class="btn btn-danger">
	 <span class="glyphicon glyphicon-trash"></span>
</button></a>

<!-- <button id="d">DELETE</button>
 -->
</td> 

<!-- <button><a href="resume/<?php echo $row['resume'];?>">CV</a></button>
-->
</tr>

<?php
$c++;	
}
?>
</table><br>

<a href="logout.php" ><button class="btn btn-primary">LOG OUT</button></a>
</center>

</body>
</html>
