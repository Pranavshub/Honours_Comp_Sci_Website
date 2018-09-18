<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Honors CS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- styles -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="assets/css/docs.css" rel="stylesheet">
        <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/color/default.css" rel="stylesheet">

        <!-- fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <!-- =======================================================
          Theme Name: Serenity
          Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
          Author: BootstrapMade.com
          Author URL: https://bootstrapmade.com
        ======================================================= -->
    </head>

    <body data-spy="scroll" data-target=".bs-docs-sidebar">
        <header>
            <!-- Navbar
            ================================================== -->
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <!-- logo -->
                        <a class="brand logo" href="index.html">
                            <img src="assets/img/logo_copy.png" alt="" />
                        </a>
                        <!-- end logo -->
                        <!-- top menu -->
                        <div class="navigation">
                            <nav>
                                <ul class="nav topnav">
                                    <li class="dropdown">
                                        <a href="Home.html">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Information</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="YearLongSchedule.html">Year Long Schedule</a></li>
                                            <li><a href="Location.html">Location</a></li>
                                            <li><a href="Image-Gallery.html">Image Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown active">
                                        <a href="#">Student Information</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="roster.html">Roster</a></li>
                                            <li><a href="login.php">Login</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- end menu -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Subhead
      ================================================== -->
        <section id="subintro">
            <div class="jumbotron subhead" id="overview">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div class="centered">
                                <h3>Class Login</h3>
                                <p>
                                    Access our schedule and grades along with a grade calculator. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <ul class="breadcrumb notop">
                            <li><a href="#">Home</a><span class="divider">/</span></li>
                            <li class="active">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="maincontent">
            <div class="container">
                <h3 class="text-center">Login</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-default">Login</button>
                </form>
                
                <?php
                session_start();
                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                   if (($username == 'San_Diego' && $password == 'torreypines')) {
                       $_SESSION['login'] = "true";
                       include ('studentRef.php');
                       #echo "<script type='text/javascript'>window.top.location='StudentPage.php';</script>";
                       #header('LOCATION:StudentPage.php');
                       #exit();
                    } 
                    else {
                        echo "<div class='alert alert-danger'>Username or Password entered incorrectly.</div>";
                    }
                } ?>
            </div>
        </section>
        <!-- Footer
       ================================================== -->
        

        <!-- JavaScript Library Files -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.easing.js"></script>
        <script src="assets/js/google-code-prettify/prettify.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/jquery.elastislide.js"></script>
        <script src="assets/js/sequence/sequence.jquery-min.js"></script>
        <script src="assets/js/sequence/setting.js"></script>
        <script src="assets/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/application.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/hover/jquery-hover-effect.js"></script>
        <script src="assets/js/hover/setting.js"></script>

        <!-- Template Custom JavaScript File -->
        <script src="assets/js/custom.js"></script>


    </body>

</html>
