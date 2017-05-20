<!DOCTYPE html>
<html>
<head>
	<title>SIGN IN </title>
	<link rel="icon" type="image/jpg" href="/images/mq1.jpg" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<style type="text/css">

body{


  background: -webkit-linear-gradient( rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(https://xubuntu.org/wp-content/uploads/2016/04/b8f9/Mountainous_View_by_Sven_Scheuermeier-1600.jpg);
    background: linear-gradient( rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(https://xubuntu.org/wp-content/uploads/2016/04/b8f9/Mountainous_View_by_Sven_Scheuermeier-1600.jpg);
     
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;



   
   }

a:active{color:white;}

</style>



</head>


<body>

<?php

session_start();

require_once('connection.php');



if(isset($_POST['logname'])&&isset($_POST['logpass']))
{$logname=$_POST['logname'];
$logpass=$_POST['logpass'];

	if(!empty($_POST['logname'])&&!empty($_POST['logpass']))
	{
	$queryl="SELECT * FROM `logintb` WHERE `name` = '$logname' AND `password` = '$logpass' ";
	$queryl_run=mysqli_query($connection,$queryl);
	if(@mysqli_num_rows($queryl_run)==1)
  	{ session_start();



		$_SESSION['check']='login';
		$_SESSION['welcomeuser']=$logname;
		header("location:index2.php");

	}
	else
	{echo '<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-

label="close">&times;</a>
    <strong>LOGIN ERROR!</strong><br>enter a valid  username and password or you can create a new account
  </div>';}	
	}
	else
		{echo '<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-

label="close">&times;</a>
    <strong>LOGIN ERROR!</strong><br>you can not leave any field empty you must supply username and password
  </div>';}
}



if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['pass'])&&isset($_POST['rpass']))
	{
$name=$_POST['name'];
$mail=$_POST['email'];
$password=$_POST['pass'];
$rpassword=$_POST['rpass'];
if($password!=$rpassword)
	echo '<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-

label="close">&times;</a>
    <strong>SIGNIN ERROR!</strong><br>password do not match  </div>';
else
{
   
 $query="SELECT * FROM `logintb` WHERE `name` = '$name' ";
 $query_run=mysqli_query($connection,$query);
 if(mysqli_num_rows($query_run)==1)
 	{echo '<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-

label="close">&times;</a>
    <strong>SIGNIN ERROR!</strong><br>user name already exist
  </div>';}
 else
 	{echo '<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-

label="close">&times;</a>
    <strong>SUCCESS!!!!</strong><br>your form has been submitted..NOW LOGIN
  </div>';

$queryi="INSERT INTO `logintb` (`id`, `name`, `email`, `password`) VALUES (NULL, '".$name."', '".$mail."', '".$password."')";
$queryi_run=mysqli_query($connection,$queryi);

}

}
}

?>



<div class="container">
  <h2 style="text-align: center;color: gray;font-size: 10vh;">DESIGN<span style="color:black;">X</span></h2>
  
<div class="jumbotron" style="width: 80%;margin-left:15%;">
  <ul class="nav nav-tabs" style=" font-size: 40px;text-align: center;margin-left: 20%">
    <li  style=" align-content: center;" class="active" ><a data-toggle="tab" href="#SIGNIN" style="font-size:22px;background-color: #337ab7;width:100%;color:white;border-radius: 30% 30% 0% 0%;width:200px;"> <i class="fa fa-pencil" aria-hidden="true" style="margin-right: 5% "></i>Sign Up
</a></li>
    <li style=" align-content: center;"><a data-toggle="tab" href="#LOGIN" style="font-size:22px;background-color: #337ab7;width:100%;color:white;border-radius: 30% 30% 0% 0%;text-align: center;width: 200px"> <i class="fa fa-sign-in" aria-hidden="true" style="margin-right: 5% margin-top:3%;"></i> LOGIN</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="SIGNIN" class="tab-pane fade in active" >
    

 <form role="form" method="POST" action="">
            <div class="form-group">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter name" name="name" required>
            </div>
              <div class="form-group">
              <label for="email" class="modcnt"><span class="glyphicon glyphicon-user"></span> Enter email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter valid email" required>
            </div>
              

            <div class="form-group">
              <label for="psw" class="modcnt"><span class="glyphicon glyphicon-eye-open" ></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Choose password" name="pass" required>
            </div>
            <div class="form-group">
              <label for="psw2" class="modcnt"><span class="glyphicon glyphicon-eye-open" ></span> Retype Password</label>
              <input type="password" class="form-control" id="psw2" placeholder="Enter password again" name="rpass" required>
            </div>

              <button type="submit" name="submit" value="submit form" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> SIGN UP</button>
          </form>









    </div>
    <div id="LOGIN" class="tab-pane fade">
     <form role="form" method="POST" action="">
            <div class="form-group">
              <label for="usrname" class="modcnt"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email" name="logname" required>
            </div>
            <div class="form-group">
              <label for="psw" class="modcnt"><span class="glyphicon glyphicon-eye-open" ></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password" name="logpass" required>
            </div>
              <button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
    </div>
    
  </div>
</div>
</div>

</body>


</html>












