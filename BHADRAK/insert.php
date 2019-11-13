
<?php 
include('config.php');
$name = $_POST['name'];
$mob= $_POST['mob'];
$email= $_POST['email'];
$pwd = $_POST['pwd'];
$dob= $_POST['dob'];
$qualification= $_POST['qualification'];
$gender = $_POST['gender'];
$hobbiesarray=$_POST['hobbies'];

$hob=implode("/",$hobbiesarray);//converting array to string

$photo=$_FILES['photo']['name'];
$tempimgname=$_FILES['photo']['tmp_name'];
move_uploaded_file($tempimgname,"uploads/$photo");
$otp=rand();

//$pwd='appstone'.rand();//auto generate password

$query = mysqli_query($con,"INSERT INTO userdata(name,mob,email,pwd,dob,qualification,photo,gender,hobbies,otp) VALUES ('$name','$mob','$email','$pwd','$dob','$qualification','$photo','$gender','$hob','$otp')");

if($query==true)  {
include('action.php');
}
else {
	echo "error";
}
?>