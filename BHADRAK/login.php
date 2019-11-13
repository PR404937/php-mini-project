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
        <!-- <li><a href="#">About</a></li>
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
      

         <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
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
    <div class="col-sm-8 text-left"> 
      <center><h1>Log In Here</h1>
     
      <hr>
     <form action="logincheck.php" method="post">
<table border="2"  class="table table-hover" style="width: 333px;">
  <tr><td>
      Email-Id</td><td><input type="email" name="email" ></td></tr>

       <tr><td>Password</td><td><input type="password" name="pwd"></td></tr>
    </table>
    <input type="submit" name="submit" id="2" class="btn btn-primary">
    </form>
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

<footer class="container-fluid text-center" style="margin-top: 250px;background-color: black;">
  <p>Copy Right Resereved By @ ABC Team</p>
</footer>

</body>
</html>
