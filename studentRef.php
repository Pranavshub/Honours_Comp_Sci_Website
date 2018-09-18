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

        <style>
            table {
                border: 1px solid;
                width: 100%;
                font-size: 22px;
                margin-bottom:30px;
            }
            .bigRow {
                padding-top: 10px;
                padding-bottom: 15px;
            }
            .rows {
                padding-bottom: 15px;
                text-align: center;
            }
            .button {
                background-color: greenyellow;
                border: none;
                color: white;
                padding: 10px 20px;
                text-align: center;
                font-size: 13px;
                margin: 3px 5px;
                cursor: pointer;
            }
        </style>
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
                                <h3>Latest Assignments</h3>
                            </div>
                        </div>
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
                                <h4>Assessment 1</h4>
                                <h6>September 19</h6>
                                <div class="dotted_line">
                                </div>
                                <p>
                                    Assessment 1 will cover the basics of HTML/CSS, with a multiple choice and a free response session. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="well">
                            <div class="centered">
                                <h4>Reading</h4>
                                <h6>September 21</h6>
                                <div class="dotted_line">
                                </div>
                                <p>
                                    Read the first 25 pages of our new textbook. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="well">
                            <div class="centered">
                                <h4>Server Set-Up</h4>
                                <h6>September 31</h6>
                                <div class="dotted_line">
                                </div>
                                <p>
                                    Make sure that you finish setting up your Linux server. Don't forget to plug it in!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <table>
                    <tr>
                        <th class = 'bigRow'>
                            Name
                        </th>
                        <th class = 'bigRow'>
                            Grades on Latest Tests
                        </th>
                    </tr>
                    <tr>
                        <td class = 'rows'>
                            Evan C
                        </td>
                        <td class = 'rows'>
                            93, 94, 98, 95
                        </td>
                    </tr>
                    <tr>
                        <td class = 'rows'>
                            Jeffrey W
                        </td>
                        <td class = 'rows'>
                            91, 100, 94, 95
                        </td>
                    </tr>
                    <tr>
                        <td class = 'rows'>
                            Grace K
                        </td>
                        <td class = 'rows'>
                            94, 95, 97, 94
                        </td>
                    </tr>
                </table>
                <h2>Grade Calculator </h2>
                <form name="calculator" >
                    <input type="button" class = 'button' value="1" onClick="document.calculator.ans.value += '1'">
                    <input type="button" class = 'button' value="2" onClick="document.calculator.ans.value += '2'">
                    <input type="button" class = 'button' value="3" onClick="document.calculator.ans.value += '3'">
                    <input type="button" class = 'button' value="4" onClick="document.calculator.ans.value += '4'">
                    <input type="button" class = 'button' value="5" onClick="document.calculator.ans.value += '5'">
                    <input type="button" class = 'button' value="6" onClick="document.calculator.ans.value += '6'">
                    <input type="button" class = 'button' value="7" onClick="document.calculator.ans.value += '7'">
                    <input type="button" class = 'button' value="8" onClick="document.calculator.ans.value += '8'">
                    <input type="button" class = 'button' value="9" onClick="document.calculator.ans.value += '9'">
                    <br>
                    <input type="button" class = 'button' value="-" onClick="document.calculator.ans.value += '-'">
                    <input type="button" class = 'button' value="+" onClick="document.calculator.ans.value += '+'">
                    <input type="button" class = 'button' value="*" onClick="document.calculator.ans.value += '*'">
                    <input type="button" class = 'button' value="/" onClick="document.calculator.ans.value += '/'">

                    <input type="button" class = 'button' value="0" onClick="document.calculator.ans.value += '0'">
                    <input type="reset" class = 'button' value="Reset">
                    <input type="button" class = 'button' value="=" onClick="document.calculator.ans.value = eval(document.calculator.ans.value)">
                    <br>
                    <br><big><big>Solution is </big></big><input type="textfield" name="ans" value="">
                </form>
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
