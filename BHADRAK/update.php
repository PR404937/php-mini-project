<?php
include('config.php');

$name = $_POST['name'];
$mob= $_POST['mob'];
//$email= $_POST['email'];
// $pwd = $_POST['pwd'];
// $dob= $_POST['dob'];
$qualification= $_POST['qualification'];
$gender = $_POST['gender'];

$hobbiesarray=$_POST['hobbies'];

$hob=implode("&nbsp;/&nbsp;",$hobbiesarray);
$id=$_POST['id'];

if($_FILES['photo']['name']!=='')
{

$photo=$_FILES['photo']['name'];
$tempimgname=$_FILES['photo']['tmp_name'];
move_uploaded_file($tempimgname,"uploads/$photo");

$query=mysqli_query($con,"update userdata set name='$name',mob='$mob',qualification='$qualification',gender='$gender',photo='$photo',hobbies='$hob' where id='$id'");
}
else{
	$query=mysqli_query($con,"update userdata set name='$name',mob='$mob',qualification='$qualification',gender='$gender',hobbies='$hob' where id='$id'");
}

if($query==true)
{
	?>
	<script type="text/javascript">

		alert('you are successfully updated');
		window.location.href='show.php';
	</script>

	<?php 
}
else {
	?>
	<script type="text/javascript">

		alert('you are not successfully updated')
		window.location.href='show.php';
	</script>

	<?php 
}
?>