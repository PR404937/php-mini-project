<?php 
session_start();
include('config.php');

if (!isset($_SESSION["email"]))
	
	{
		echo $email=$_POST["email"];
		echo $password=$_POST['pwd'];

		$query1 = mysqli_query($con,"select * from userdata where email='$email' && pwd='$password' && status=1");
		$query2 = mysqli_query($con,"select * from admin where email='$email' && password='$password'");

		$rowcount1= mysqli_num_rows($query1);
		$rowcount2= mysqli_num_rows($query2);
//$row=mysql_fetch_array($query);
		if($rowcount1==true)
		{	
			header("Location:show2.php");
			$_SESSION["email"]=$email;
		}
		else if ($rowcount2==true)
		{
			header("Location:show.php");
			$_SESSION["email"]=$email;
		}
		else{
		 ?>
	<script type="text/javascript">	
		alert('Sorry Wrong userid or password');
		window.location.href='login.php';
	</script>
	<?php 
	}
}
else {
	?>
	<script type="text/javascript">	
		alert('please logout first');
		window.location.href='login.php';
	</script>
	<?php 
}
?>