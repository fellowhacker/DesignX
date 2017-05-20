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
        <!-- box header -->
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
              <a class="btn btn-info btn-outline btn-circle "   href="register.php" >Register</a>
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
    </div>

    <!-- top bar -->
    <div class="top-bar">
        <h1>Categories</h1>
        <p><a href="#">Home</a> / Categories</p>
    </div>
    <!-- end top bar -->

    <div class="container main-container">
        <div class="clearfix">

            <!-- service-box -->
            <div class="col-md-4 service-box">
               <!-- <i class="ion-android-favorite-outline size-50"></i>-->
               <img src="img/graphic_design.png" style="width:50px"><br><br>
                <h3>Graphic Designing</h3>
                <div class="h-10"></div>
                <p> Create and combine symbols, images and text to form visual representations of ideas and messages using typography, visual arts, and page layout techniques to create visual compositions. Common uses of graphic design include corporate design (logos and branding), editorial design (magazines, newspapers and books), wayfinding or environmental design, advertising, communication design, product packaging and signage. </p>
                
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4 service-box">
                
                <img src="img/webicon.png" style="width:50px"><br><br>
                <h3>Web Designing</h3>
                <div class="h-10"></div>
                <p>Indulge in the design process relating to the front-end (client side) design of a website including writing mark up, partially overlapping web engineering in the broader scope of web development. You are expected to have an awareness of usability and  be up to date with web accessibility guidelines. Web designers use both vector and raster graphics editors to create web-formatted imagery or design prototypes.  </p>

            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <img src="img/motion_graphic.jpg" style="width:50px"><br><br>
                <h3>Motion Graphics Designing</h3>
                <div class="h-10"></div>
                <p>A typical motion designer is a person trained in traditional graphic design who has learned to integrate the elements of time, sound and space into his/her existing skill set of design knowledge.Adobe Flash is widely used to create motion design for the web. </p><br><br><br><br><br><br>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <img src="img/animation.png" style="width:60px"><br><br>
                <h3>Animation</h3>
                <div class="h-10"></div>
                <p>Create a nostalgia by soaking yourself in the process of making the illusion of motion and the illusion of change by means of the rapid display of a sequence of images that minimally differ from each other.
 </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <img src="img/phonic.jpg" style="width:50px"><br><br>
                <h3>Phonic Designing</h3>
                <div class="h-10"></div>
                <p>Specify, acquire, manipulate, and generate audio elements. Create your own remix for  filmmaking, television production, theatre, sound recording and reproduction, live performance, sound art, post-production, radio or video game development. </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <img src="img/industrial.png" style="width:50px"><br><br>
                <h3>Industrial Designing</h3>
                <div class="h-10"></div>
                <p>Design products that are to be manufactured through techniques of mass production. The creative act of determining and defining a product's form and features takes place in advance of the physical act of making a product, which consists purely of repeated, often automated, replication.</p>
            </div>
            <!-- end service-box -->
            <!-- service-box -->
            <div class="col-md-4  service-box1">
                <img src="img/68946.png" style="width:130px"><br><br>
                <h3>Fashion Designing</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->
            <!-- service-box -->
            <div class="col-md-4  service-box">
                <img src="img/arch.jpg" style="width:90px"><br> 
                <h3>Architectural & Interior Designing</h3>
                <div class="h-10"></div>
                <p>An architectural designer is a person that is involved in the design of buildings or urban landscapes.Enhance the interiors to achieve a healthier and more aesthetically pleasing environment for the end user. Interior design is the process of shaping the experience of interior space, through the manipulation of spatial volume as well as surface treatment for the betterment of human functionality. </p>
            </div>
            <!-- end service-box -->
           

        </div>
    </div>


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