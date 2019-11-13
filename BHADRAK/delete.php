<?php
include('config.php');

$id=$_GET['id'];

$query=mysqli_query($con,"DELETE FROM userdata WHERE id='$id'");

if($query==true)
{
?>
<script>
alert('Data successfully deleted');
window.location.href='show.php';
	</script>
<?php
}
else {
	echo "error";
}
?>