<?php
session_start();

require_once('connection.php');
if(isset($_POST) & !empty($_POST)){

$username = mysqli_real_escape_string($connection,$_POST['username']);
$password =md5($_POST['password']);


 $sql = " SELECT * FROM login WHERE username='$username' AND password='$password'";
$result = mysqli_query($connection ,$sql);

$count = mysqli_num_rows($result);

if ($count == 1) {
  $_SESSION['username']= $username;
 
}else{
  echo "Invalid Username/Password";
}

if(isset($_SESSION['username'])){

header('index2.php');

}


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DesignX</title>
    <link rel="icon" href="img/Logo_DX.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">

      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




    <!-- modernizr -->
    <script src="js/modernizr.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <!--<div class="double-bounce1"></div>
                <div class="double-bounce2"></div>-->
                <img src="img/preloader.gif">
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid"> 
       <!-- box-header -->
    <header id="header" headroom role="banner" tolerance="5" offset="700" class="navbar navbar-fixed-top navbar--white">
  <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index2.php">DesignX</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index2.php">Home</a></li>
            <li><a href="aboutus.php">About DX</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="portfolio.php">Campus Ambassador Programme</a></li>
            
            <li><a href="contact.php">Contact Us</a></li>
      <!--      <?php if(isset($_SESSION["username"])) {

echo ('<li id="login"><a class="btn btn-default btn-outline btn-circle collapsed"  href="logout.php">Logout</a></li>');

}else{
    echo ('<li id="login"><a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse2" aria-expanded="false" aria-controls="nav-collapse2">Signin</a></li>');


}
?> 

             <li>
              <a class="btn btn-info btn-outline btn-circle"   href="register.php" >Register</a>
            </li>  -->
          </ul>



 <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse2">
            <form class="navbar-form navbar-left form-inline form-signin" role="form" method="POST">
              <div class="form-group">
                <label class="sr-only" for="Email">Username</label>
                <input type="username" class="form-control" id="Email" placeholder="Username" name="username" autofocus required />
              </div>
              <div class="form-group">
                <label class="sr-only" for="Password">Password</label>
                <input type="password" class="form-control" id="Password" name="password" placeholder="Password" required />
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
                <a    href="signin.php" >Not Registered?</a>
            </form>
          </div>



 


        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
</header>
        <!-- end nav -->  
    </div>
    
    <!-- Top bar -->
    <div class="top-bar">
        <h1>About DX</h1>
        <p>India's LARGEST ONLINE DESIGNING COMPETITION</p>
    </div>
    <!-- end Top bar -->
    
    <!-- Main container -->
    <div class="container main-container clearfix"> 
        <div class="col-md-6">
            <img src="img/03.jpg" height="1200" width="800" class="img-responsive" alt="" />
        </div>
        <div class="col-md-6">
           <h3 class="uppercase">About DX </h3>
           <h5>DesignX</h5>
           <div class="h-30"></div>
            <p>Welcome to the colourful world of innovation and designing! DesignX is India's LARGEST ONLINE DESIGNING COMPETITION aimed at handpicking the best Graphic Designers from across the country.</p>

            <p>Whether an amateur or professional, but driven by the zeal to make a significant mark and communicate your message in the world through designing, here we give you a chance, literally! There are 8 wings that you can participate in :-</p>

            
            <div class="h-10"></div>
            <ul class="social-ul">
                <li class="box-social"><a href="https://www.facebook.com/ArtZoneDesigners/"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="https://www.instagram.com/artzonedesigners/"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="https://twitter.com/Artzone123"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="https://www.youtube.com/channel/UCO4E_uUNULm2oqBFxb72zpw"><i class="ion-social-youtube"></i></a></li>
            </ul>


        </div>
    </div>
    <!-- end Main container -->


    <!-- footer -->
    <footer>
        <div class="container-fluid">
           <p>All Right Reserved</p>
           <a href="http://www.artzonedesigners.com/" target="blank" style="color:black;text-decoration:none"> &copy; ArtZone Designers 2017</a>
        </div>
    </footer>
    <!-- end footer -->
    
    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->



    <!-- jQuery -->
    <script src="js/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>


    <!--  custom script -->
    <script src="js/custom.js"></script>

</body>

</html>