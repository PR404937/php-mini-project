<?php

include('config.php');

$id=$_GET['id'];

$query=mysqli_query($con,"select * from userdata where id='$id'");

$row=mysqli_fetch_assoc($query);

$gender=$row['gender'];

$hobbies_array = explode("&nbsp;/&nbsp;", $row['hobbies']);
// $query = mysql_query("update userdata set name='$name',email='$email',pwd='$pwd' where id='$id'");
?>

<!DOCTYPE html>
<html>
<head>
	<title>SHOW DATA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
	<center>
		<br>
<h1>UPDATE YOUR DETAILS</h1><br>
	






<form action="update.php"  method="post" enctype="multipart/form-data">
<table class="table table-hover" style="width: 710px;" border="2">
  <tr>
    <td>
    	<input type="hidden" name="id" value="<?php echo $id;?>" >
      NAME </td><td><input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>"></td></tr>

     <tr><td> MOBILE NUM </td><td> <input value="<?php echo $row['mob'];?>" class="form-control" type="text" name="mob"></td></tr>

      <tr><td>E-mail </td><td><input class="form-control" value="<?php echo $row['email'];?>" type="email" name="email"></td></tr>

       <tr><td>PASSWORD </td><td> <input class="form-control" type="password" name="pwd" value="<?php echo $row['pwd'];?>"></td></tr>

       <tr><td>D.O.B </td><td><input class="form-control" type="date" name="dob"></td></tr>

       <tr><td>Qualification </td><td>

      <select class="form-control" name="qualification">
        
<option value="<?php echo $row['qualification'];?>"><?php echo $row['qualification'];?></option>
			             <option value="b.tech">B.TECH</option>
			             <option value="mca">MCA</option>
			             <option value="m.tech">M.TECH</option>
			             <option value="bca">BCA</option>

        </td></tr>

       <tr><td>PHOTO </td><td><img src="uploads/<?php echo $row['photo']; ?>" width="200px" alt="candidate's photo"><br> <input class="form-control" type="file" name="photo"></td></tr>

       <tr><td>GENDER </td><td> 

<input type="radio" name="gender" value="male" <?php if ($gender=='male') { echo'checked';}?>> MALE

		<input type="radio" name="gender" value="female" <?php 
		if ($gender=='female'){ echo 'checked';}?>> FEMALE

		<input type="radio" name="gender" value="other" <?php if ($gender=='other'){ echo 'checked';}?>
		> OTHER
       </td></tr>

       <tr><td>HOBBIES </td><td> 




		HOBBIES=
		<input type="checkbox" name="hobbies[]" value="playing" <?php if(in_array("playing", $hobbies_array)){ echo "checked"; } ?>>PLAYING

		<input type="checkbox" name="hobbies[]" value="singing" <?php if(in_array("singing", $hobbies_array)){ echo "checked"; } ?>>SINGING

		<input type="checkbox" name="hobbies[]" value="dancing"

		 <?php if(in_array("dancing", $hobbies_array))
		 { echo "checked"; } 
		 ?>

		 >DANCING

       </td></tr>

      
   
  </table>
  <br>
  <input type="submit" class="btn btn-primary" name="submit2">&nbsp;<input class="btn btn-primary" type="reset" name="reset">
    </form>
</center>
</body>
</html>