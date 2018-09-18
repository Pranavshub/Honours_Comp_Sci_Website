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
                                <?php
        
                                session_start();
                                $a = $_SESSION['login'];
                                #echo $a.'____';
                                if ( $a != 'true') { //if login in session is not set
                                    header('Location: login.php');
                                }
//                            
//                                print_r($_SESSION);
                                session_destroy();
//                                
//                                $var = $_SESSION['login'];
//                                echo $var; 
//                                echo 'here';
                                ?>
        <header>
            <!-- Navbar
            ================================================== -->
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <!-- logo -->
                        <a class="brand logo" href="index.html">
                            <img src="assets/img/logo.png" alt="" />
                        </a>
                        <!-- end logo -->
                        <!-- top menu -->
                        <div class="navigation">
                            <nav>
                                <ul class="nav topnav">
                                    <li class="dropdown">
                                        <a href="Home.html">Home</a>
                                    </li>
                                    <li class="dropdown active">
                                        <a href="#">Information</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="YearLongSchedule.html">Year Long Schedule</a></li>
                                            <li><a href="Location.html">Location</a></li>
                                            <li><a href="Image-Gallery.html">Image Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Student Information</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="roster.html">Pricing table</a></li>
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
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
                                <h3>Student Information</h3>


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
                            <li class="active">Blog right sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="maincontent">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="well">
                            <div class="centered">
                                <i class="icon-circled icon-64 icon-suitcase active"></i>
                                <h4>High integrity</h4>
                                <div class="dotted_line">
                                </div>
                                <p>
                                    Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri. Mel virtute efficiantur ne, zril omnes sed no, sit eu duis semper.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="well">
                            <div class="centered">
                                <i class="icon-circled icon-64 icon-leaf active"></i>
                                <h4>Following trends</h4>
                                <div class="dotted_line">
                                </div>
                                <p>
                                    Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri. Mel virtute efficiantur ne, zril omnes sed no, sit eu duis semper.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="well">
                            <div class="centered">
                                <i class="icon-circled icon-64 icon-coffee active"></i>
                                <h4>Have a solid team</h4>
                                <div class="dotted_line">
                                </div>
                                <p>
                                    Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri. Mel virtute efficiantur ne, zril omnes sed no, sit eu duis semper.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <div class="divider">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <h4>Our services</h4>
                        <!-- start: Accordion -->
                        <div class="accordion" id="accordion2">
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                        <i class="icon-minus"></i> Database management</a>
                                </div>
                                <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                        raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                        <i class="icon-plus"></i> UI development</a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                        raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                        <i class="icon-plus"></i> Social media</a>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                        raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Accordion -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer
       ================================================== -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="widget">
                            <h5>Browse pages</h5>
                            <ul class="regular">
                                <li><a href="Home.html">Home</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="#">Other #1</a></li>
                                <li><a href="#">Other #2</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget">
                            <!-- logo -->
                            <a class="brand logo" href="index.html">
                                <img src="assets/img/logo.png" alt="" />
                            </a>
                            <!-- end logo -->
                            <address>
                                <strong>The Bishop's School</strong><br>
                                7607 La Jolla Blvd<br>
                                La Jolla, CA 92037<br>
                                <abbr title="Phone">P:</abbr> 858-999-9999
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

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
