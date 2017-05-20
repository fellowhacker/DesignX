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
   $_SESSION['password']= $password;
 
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


    <link href="css/style1.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <!-- modernizr -->
    <script src="js/modernizr.js"></script>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="login_form.js"></script>






    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



<style>
 


</style>

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
          <a class="navbar-brand" href="index2.php">Design<font color="black">X</font></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index2.php">Home</a></li>
            <li><a href="aboutus.php">About DX</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="portfolio.php">Campus Ambassador Programme</a></li>
            
            <li><a href="contact.php">Contact Us</a></li>
         <!--   <?php if(isset($_SESSION["username"])) {

echo ('<li id="login"><a class="btn btn-default btn-outline btn-circle collapsed"  href="logout.php">Logout</a></li>');

}else{
    echo ('<li id="login"><a class="btn btn-default btn-outline btn-circle collapsed"   href="signin.php" >Signin</a></li>');


}
?> -->
           
          </ul>




          <!-- Large modal -->




         

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



           
            <!-- box-primary-nav-trigger -->
       
        <!-- end box header -->

        <!-- nav -->

        <!-- end nav -->


        <div id = "loginform">

             <p id="close_login"> &times; </p>
             <form method = "post" action = "" id="llog">
             <div id="ccon">
                     <br><br>
  
                    <p  class="log_her" >LOGIN HERE</p>
            <div class="abcd">

                     <input type = "text" id = "login" placeholder = "Email Id" name = "uid">
                    <input type = "password" id = "password" name = "upass" placeholder = "***">
                    <input type = "submit" id = "dologin" value = "Login">
            

                   <!-- <input type="button" value="Click For SignUp!" onclick="signup_flip();">-->


            </div>
                    <a href="#" class="newuser" style="text-align:center">New User? Sign up here</a>
             </div>
             </form>
        </div>

        <!-- box-intro -->
        <section class="box-intro" id="hero1">
            <div class="table-cell">

                <h1 class="box-headline letters rotate-2">
                    <span class="box-words-wrapper">
                        <b class="is-visible">Create </b>
                        <b>&nbsp;&nbsp; Design </b>
                        <b>Develop </b>
                    </span>
		        </h1>
                <h5>india's largest online designing competition</h5>

                <div class="btn-group row">
                <div class="col-lg-6">
  
   

 <!--  <?php if(isset($_SESSION["username"])) {

echo ('<a href="register.php" class="btn btn-info btn-lg "> Register </a>');

}else{
    echo ('<a href="index2.php" class="btn btn-info btn-lg "> Register </a>');
    echo ('<br>');
    echo ('<font color="gray">    * Signin to Register</font>');



}
?> -->
 
</div>

<div class="btn">
   <a href="sponsor.php" class="btn btn-info btn-lg ">Sponsor Us</a> 
 
 </div>
</div>
            </div>

<!-- Large button group -->



            <div class="mouse">
                <div class="scroll"></div>
            </div>
        </section>
        <!-- end box-intro -->
    </div>

    <!-- portfolio div -->
  <!--  <div class="portfolio-div">
        <div class="portfolio">
            <div class="no-padding portfolio_container">
                 
                <div class="col-md-3 col-sm-6  fashion logo">
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
                
                <div class="col-md-3 col-sm-6 ads graphics">
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
                
                <div class="col-md-6 col-sm-12 photography">
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
                 
                <div class="col-md-3 col-sm-6 fashion ads">
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
                
                <div class="col-md-3 col-sm-6 graphics ads">
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
                
                <div class="col-md-6 col-sm-12 photography">
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
                 
                <div class="col-md-3 col-sm-6 graphics ads">
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
                 
                <div class="col-md-3 col-sm-6 graphics ads">
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
                 
                <div class="col-md-3 col-sm-6 graphics ads">
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
                
                <div class="col-md-3 col-sm-6 graphics ads">
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
         
    </div>   -->
    <!-- end portfolio div -->

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
    


    



   <!-- <script type="text/javascript">

    function login_flip()
    {
      $("#llog").css({"-webkit-transition":"-webkit-transform 0.9s","transition":" transform 0.9s"});
      $("#llog").css({"-moz-transform":"scaleX(1)","-o-transform":"scaleX(1)","-webkit-transform":"scaleX(1)","transform":"scaleX(1)"});
      $("#ccon").css("-webkit-transform","scaleX(1)");
    /*  document.getElementById("ccon").innerHTML="<p>User Id</p><input type='text'><p>Password</p><input type='password'><br><input type='submit' value='Login'><input type='button' value='Click For SignUp!' onclick='signup_flip();'>";*/
    }

    function signup_flip()
    {
      $("#llog").css({"-webkit-transition":"-webkit-transform 0.9s","transition":" transform 0.9s"});
      $("#llog").css({"-moz-transform":"scaleX(-1)","-o-transform":"scaleX(-1)","-webkit-transform":"scaleX(-1)","transform":"scaleX(-1)"});
      $("#ccon").css("-webkit-transform","scaleX(-1)");
      document.getElementById("ccon").innerHTML="<p>User Name</p><input type='text'><p>Email Id</p><input type='text'><p>Password</p><input type='password'><br><input type='submit' value='SignUp'><input type='button' value='Click For Login!' onclick='login_flip();'>";
    }
    
  </script>-->

</body>

</html>