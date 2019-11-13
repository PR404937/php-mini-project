<?php

include('config.php');

$otp=$_POST['otp'];

$query=mysqli_query($con,"SELECT * FROM userdata WHERE otp='$otp'");
$result=mysqli_num_rows($query);

if ($result) {

	$query2=mysqli_query($con,"update userdata set status=1 where otp='$otp'");

	
	?>
<script>
alert('Registration successfull..Please Log in');
window.location.href='login.php';
	</script>
<?php

}
else {
echo "invalid otp";
}

?>