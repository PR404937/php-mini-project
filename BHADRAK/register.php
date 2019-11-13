<!DOCTYPE html>
<html lang="en">
<head>
  <title>Educare</title>
  <meta charset="utf-8">
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
  <style type="text/css">
    tr{text-align: center;font-size: 16px;}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Educare</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
       <!--  <li><a href="#">About</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Contact</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php 
    session_start();
    if (isset($_SESSION['email'])) { 
      ?>
    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>'
    <?php 
    }
    else{
      ?>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

         
<?php
     }
     ?>

         
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
    </div>
    <div class="col-sm-8 "> 
      <center>
     <h2><u>REGISTER HERE</u></h2><br>

    <form action="insert.php"  method="post" enctype="multipart/form-data">
<table class="table table-hover" style="width: 710px;" border="2">
  <tr>
    <td>
      NAME </td><td><input type="text" name="name" class="form-control"></td></tr>

     <tr><td> MOBILE NUM </td><td> <input class="form-control" type="text" name="mob"></td></tr>

      <tr><td>E-mail </td><td><input class="form-control" type="email" name="email"></td></tr>

       <tr><td>PASSWORD </td><td> <input class="form-control" type="password" name="pwd"></td></tr>

       <tr><td>D.O.B </td><td><input class="form-control" type="date" name="dob"></td></tr>

       <tr><td>Qualification </td><td>

      <select class="form-control" name="qualification">
        <option value="b.tech">B.TECH</option>
        <option value="mca">MCA</option>
        <option value="m.tech">M.TECH</option>
        <option value="bca">BCA</option>
      </select></td></tr>

       <tr><td>PHOTO </td><td> <input class="form-control" type="file" name="photo"></td></tr>

       <tr><td>GENDER </td><td> <input  type="radio" name="gender" value="male" checked> MALE

   <input type="radio" name="gender" value="female"> FEMALE

     <input type="radio" name="gender" value="other"> OTHER</td></tr>

       <tr><td>HOBBIES </td><td> <input type="checkbox" name="hobbies[]" value="playing" checked> PLAYING

      <input type="checkbox" name="hobbies[]" value="singing"> SINGING

      <input type="checkbox" name="hobbies[]" value="dancing"> DANCING</td></tr>

      
   
  </table>
  <br>
  <input type="submit" class="btn btn-primary" name="submit2">&nbsp;<input class="btn btn-primary" type="reset" name="reset">
    </form>
  </center>
    </div>
    <div class="col-sm-2 sidenav">
      <div >
        <p></p>
      </div>
      <div >
        <p></p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center" style="margin-top: 115px;background-color: black;">
  <p>Copy Right Resereved By @ ABC Team</p>
</footer>

</body>
</html>
