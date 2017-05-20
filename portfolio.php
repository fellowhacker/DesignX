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
       <!--     <?php if(isset($_SESSION["username"])) {

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
        <!-- end nav -->
    </div>

    <!-- top bar -->
    <div class="top-bar">
        <h1>CAMPUS AMBASSADOR PROGRAMME</h1>
        <p><a href="#">Home</a> / CAP</p>
    </div>
    <!-- end top bar -->

    <!-- main container -->
    <!--<div class="main-container portfolio-inner clearfix">
        
        <div class="portfolio-div">
            <div class="portfolio">
               
                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                            <li><a href="" class="active" data-filter="*">All</a></li>
                            <li><a href="" data-filter=".photography">Photography</a></li>
                            <li><a href="" data-filter=".logo">Logo</a></li>
                            <li><a href="" data-filter=".graphics">Graphics</a></li>
                            <li><a href="" data-filter=".ads">Advertising</a></li>
                            <li><a href="" data-filter=".fashion">Fashion</a></li>
                        </ul>
                    </nav>
                </div>
                 
                <div class="no-padding portfolio_container clearfix">
                     
                    <div class="col-md-4 col-sm-6  fashion logo">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mockups in seconds</span>
                                        <em>Fashion / Logo</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                     
                    <div class="col-md-4 col-sm-6 ads graphics">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Floating mockups</span>
                                        <em>Ads / Graphics</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                     
                    <div class="col-md-4 col-sm-12 photography">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Photorealistic smartwatch</span>
                                        <em>Photography</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                     
                    <div class="col-md-4 col-sm-6 fashion ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Held by hands</span>
                                        <em>Fashion / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-4 col-sm-12 photography">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Photorealistic smartwatch</span>
                                        <em>Photography</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                     
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                     
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
                 
            </div>
             
        </div>
        
    </div>-->

    <!-- AAPLICATIONS COUNT -->

        <div class="cnntt">

            <div class="abcdef"><b>Over</b></div>
            <div id="shh"><span class="count">100</span></div>
            <div class="abcdefg"><p><b>Responses received so far for our CAP</b></p></div>


        </div>


    <!-- END OF APPLICATIONS COUNT -->



    <!-- MAIN SECTION -->

 <br>
        <div class="apply">
            
            <a href="https://goo.gl/forms/oG4aZyMx5VxxTGHS2" target="blank"><button>APPLY</button></a><br><br>

        </div>

    <!-- END OF MAIN SECTION -->
    
    <!-- BODY -->


    <div class="bbbb">
        <p>
        <br>
       We, ARTZONE Designers are going to launch India's largest online designing competition "DESIGN X".We cordially invite you to be the Campus Ambassador of your college. We here by give you an opportunity for to join our team, explore, discover and learn fascinating stuff.<br><br>
            We have organized the Campus Ambassador Program in which you will be indulged in vibrant forms of student outreach in your college.<br>

            <span style="color:black;"><b>The expected duties of a Campus Ambassador are to,</b></span><br>

                1) Carry out offline publicity of "DESIGN X" in your college through word-of-mouth and posters. <br>
   
                2) Co-ordinate between the event and your collegemates.<br>

                3) Educate others about "DESIGN X"<br>

                4) To inculcate zeal and enthusiam towards "DESIGN X" among the students
                of your college.<br>

                5) Ensure online publicity of "DESIGN X" through social media
                in your city and especially in your college.<br>

                6) Encourage and facilitate active participation in "DESIGN X" from your college.<br>
   
            <span style="color:black"><b>Perks of being a Campus Ambassador:</b></span><br>
                1)Free registration<br>
                2)Goodies and coupons<br>
                3)Free T-shirts<br>
                4)Token of appreciation<br>

                    All the exuberant students are welcome and are requested to Apply.<br>
        </p>

    </div>


    <!-- END OF BODY -->

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


    <script>
    
        $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 6000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
                 }
            }); 
        });


</script>

</body>

</html>