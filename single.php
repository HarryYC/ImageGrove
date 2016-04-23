<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Image Grove | Image Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Photo-Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <!--webfont-->
        <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script src="js/menu_jquery.js"></script> 
    </head>
    <body>
        <div class="header">	
            <div class="container"> 
                <div class="logo">
                    <h1><a href="index.html">Image Grove</a></h1>
                </div>
                <div class="search">
                        <ul class="nav1">
                            <li id="search">
                                <form action="./stock.php" method="get">
                                    <input type="text" name="search_string" id="search_text" placeholder="Search"/>
                                    <input type="button" name="search_button" id="search_button">
                                </form>
                            </li>
                            <li id="options">
                                <a href="#">All Images</a>
                                <ul class="subnav">
                                    <li><a href="#">Images</a></li>
                                    <li><a href="#">Video</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                <div class="top_right">
                    <ul>
                        <li><a href="register.html">Register</a></li>|
                        <li class="login" >
                            <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                                <div id="loginBox">                
                                    <form id="loginForm">
                                        <fieldset id="body">
                                            <fieldset>
                                                <label for="email">Email Address</label>
                                                <input type="text" name="email" id="email">
                                            </fieldset>
                                            <fieldset>
                                                <label for="password">Password</label>
                                                <input type="password" name="password" id="password">
                                            </fieldset>
                                            <input type="submit" id="login" value="Sign in">
                                            <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                        </fieldset>
                                        <span><a href="#">Forgot your password?</a></span>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="single">
            <div class="container">
                <div class="single_box1">
                    <div class="col-sm-5 single_left">
                        <?php echo "<img src='./PHP/get.php?id={$_GET['image_id']}&type=medium' class='img-responsive' alt=''/>" ?>
                    </div>
                    <div class="col-sm-7 col_6">
                        <ul class="size">
                            <h3>Size</h3>
                            <li><a href="#">S</a></li>
                            <li><a href="#">M</a></li>
                            <li><a href="#">L</a></li>
                        </ul>
                        <a class="btn_3" href="price.html">Buy this Photo</a>
                        <?php echo "<p class='movie_option'><strong>Id# : </strong>{$_GET['image_id']}</p>" ?>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <h4 class="tag_head">Description</h4>
                <!-- dynamic data for title of piece, artist info, etc... -->
                <div><?php echo "{$_GET['image_title']}" ?></div>
                <div><?php echo "by Artist Name here" ?></div>
                <div class="tags">
                </div>
            </div>
        </div>
        <div class="grid_2">
            <div class="container"> 
                <div class="col-md-3 col_2">
                    <h3>Stock Photo<br>Categories</h3>
                </div>
                <div class="col-md-9 col_5">
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Abstract">Abstract</a></li>
                            <li><a href="./stock.php?search_string=Animals">Animals</a></li>
                            <li><a href="./stock.php?search_string=Arts">The Arts</a></li>
                            <li><a href="./stock.php?search_string=Textures">Textures</a></li>
                            <li><a href="./stock.php?search_string=Fashion">Fashion</a></li>
                            <li><a href="./stock.php?search_string=Landmarks">Landmarks</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Business">Business</a></li>
                            <li><a href="./stock.php?search_string=Celebrities">Celebrities</a></li>
                            <li><a href="./stock.php?search_string=Editorial">Editorial</a></li>
                            <li><a href="./stock.php?search_string=Education">Education</a></li>
                            <li><a href="./stock.php?search_string=Food">Food</a></li>
                            <li><a href="./stock.php?search_string=Healthcare">Healthcare</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Holidays">Holidays</a></li>
                            <li><a href="./stock.php?search_string=Illustrations">Illustrations</a></li>
                            <li><a href="./stock.php?search_string=Industrial">Industrial</a></li>
                            <li><a href="./stock.php?search_string=Interiors">Interiors</a></li>
                            <li><a href="./stock.php?search_string=Miscellaneous">Miscellaneous</a></li>
                            <li><a href="./stock.php?search_string=Model">Model</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Nature">Nature</a></li>
                            <li><a href="./stock.php?search_string=Objects">Objects</a></li>
                            <li><a href="./stock.php?search_string=Parks">Parks</a></li>
                            <li><a href="./stock.php?search_string=People">People</a></li>
                            <li><a href="./stock.php?search_string=Religion">Religion</a></li>
                            <li><a href="./stock.php?search_string=Science">Science</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="grid_3">
            <div class="container">
                <ul id="footer-links">
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Royalty Free License</a></li>
                    <li><a href="#">Extended License</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="support.html">Support</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="#">Categories</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>		