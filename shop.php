<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Search Results</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> (415)555 - 5555</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.html"><img src="images/home/Logo.PNG" alt="ImageGrove" /></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                <li class="dropdown"><a href="index.html"><i class="fa fa-user"></i>Account<i class="fa fa-angle-down"></i></a>
                                                <ul role="menu" class="sub-menu">
                                                    <li><a href="AdminPage.html">Admin</a></li>
                                                </ul>
                                            </li>
                                <li><a href="./contact-us.html"><i class="fa fa-envelope"></i>Mail</a></li>
                         
                                <li><a href="./login.html"><i class="fa fa-sign-out"></i> LogOut</a></li>

                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="index.html" class="active">Home</a></li>
<!--                                    <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="./shop.php?search_string=test">Products</a></li>
                                            <li><a href="#">Checkout</a></li>
                                            <li><a href="./login.html">Login</a></li> 
                                        </ul>
                                    </li> -->
                                    <li><a href="./browse.html">Browse by Category</a></li>
                                    <li><a href="./contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->

        <section>
            <div class="container">
                <section id="search-box" ><!--search-box-->
                    <div class="container">
                        <div id="searchbar">
                            <form id="search-form" action="./shop.php" method="GET" enctype="multipart/form-data">
                                <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-1 col-lg-8 col-lg-offset-2">
                                    <div class="input-group input-group-lg">

                                        <input id="searchbox" class="form-control" type="text" name="search_string" value="<?php echo $_GET['search_string'] ?>">
                                        <span class="input-group-btn">
                                            <button id="search-button" type="submit" class="btn btn-default">
                                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section><!--/searchbox-->
                <br>
                <div class="row">
                    <div class="col-sm-12 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Search Results for "<?php echo $_GET['search_string'] ?>"</h2>
                            <div class="col-sm-8 col-sm-offset-2"><!-- filter box -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Filter this Search
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="mens" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form name="myform" action="./shop.php?search_string=<?php echo $_GET['search_string']; ?>" method="POST">
                                                <div class="col-sm-6">
                                                    Orientation: <select name="orientation" onchange="this.form.submit()">
                                                        <option disabled selected value> -- select an option -- </option>
                                                        <option value="landscape">Landscape</option>
                                                        <option value="portrait">Portrait</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    Licenses Available: <select name="license" onchange="this.form.submit()">
                                                        <option disabled selected value> -- select an option -- </option>
                                                        <option value="web">Web</option>
                                                        <option value="print">Print</option>
                                                        <option value="unlimited">Unlimited</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    Size: <select name="size" onchange="this.form.submit()">
                                                        <option disabled selected value> -- select an option -- </option>
                                                        <option value="small">Small</option>
                                                        <option value="medium">Medium</option>
                                                        <option value="large">Large</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    Price Range: <select name="price_range" onchange="this.form.submit()">
                                                        <option disabled selected value> -- select an option -- </option>
                                                        <option value="0">$0-$50</option>
                                                        <option value="1">$50-$100</option>
                                                        <option value="2">$100-$150</option>
                                                        <option value="3">$150-$200</option>
                                                        <option value="4">$200+</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="text-center">
                            <?php 
                            if (isset($_POST['orientation']) && ($_POST['orientation'] != ""))
                                $filter = "Orientation: ".$_POST['orientation'];
                            else if (isset($_POST['size']) && ($_POST['size'] != ""))
                                $filter = "Size: ".$_POST['size'];
                            else if (isset($_POST['license']) && ($_POST['license'] != ""))
                                $filter = "License: ". $_POST['license'];
                            else if (isset($_POST['price_range']) && ($_POST['price_range'] != ""))
                                $filter = "Price Range: ".$_POST['price_range'];
                            if (isset($filter) && $filter != "")    
                                echo "<h4>Filtering search by " . $filter. "</h4>"; 
                            ?>
                            </div>
                                <br />
                            </div><!-- /filter box -->
                            
                            <?php
                            $search_string = $_GET['search_string'];
                            
                            // Connect to the database
                            $dbLink = new mysqli('sfsuswe.com', 'earaujo', 'swes2016db', 'student_earaujo');
                            if (mysqli_connect_errno()) {
                                die("MySQL connection failed: " . mysqli_connect_error());
                            }

                            // Query for a list of all existing files
                            $sql = 'SELECT id, description, imageTitle FROM `file`';
                            $result = $dbLink->query($sql);

                            // Check if it was successfull
                            if ($result) {
                                // Make sure there are some files in there
                                if ($result->num_rows == 0) {
                                    echo '<p>There are no files in the database</p>';
                                } else {
//                                     Print each file
                                    while ($row = $result->fetch_assoc()) {
                                        if (strripos($row['description'], $search_string) !== false) {
                                            echo "
                                                <div class='col-sm-4'>
                                                    <div class='product-image-wrapper'>
                                                        <div class='single-products'>
                                                            <div class='productinfo text-center'>
                                                                <form id='product_details' action='./product-details.php' method='GET'>
                                                                    <input type='hidden' name='image_title' value='{$row['imageTitle']}'/>
                                                                    <button type='submit' style='padding: 0; border: 0;' name='image_id' value='{$row['id']}'><img src='./PHP/get.php?id={$row['id']}&type=thumbnail' style='width:255px;height:250px;'></button>
                                                                </form>
                                                                <h2>$$$</h2>
                                                                <p>{$row['imageTitle']}</p>
                                                                <a onclick='purchaseAlert()' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>BUY</a>
                                                            </div>
                                                        </div>
                                                        <div class='choose'>
                                                            <ul class='nav nav-pills nav-justified'>
                                                                <li><a href='#'><i class='fa fa-plus-square'></i>Add to compare</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>";
                                        }
                                    }
                                }
//                                 Free the result
                                $result->free();
                            } else {
                                echo '<br/>Error! SQL query failed:';
                                echo "<pre>{$dbLink->error}</pre>";
                            }

                            // Close the mysql connection
                            $dbLink->close();
                            ?>

                            <!--                            <ul class="pagination">
                                                            <li class="active"><a href="">1</a></li>
                                                            <li><a href="">2</a></li>
                                                            <li><a href="">3</a></li>
                                                            <li><a href="">&raquo;</a></li>
                                                        </ul>-->
                        </div><!--features_items-->
                        <br />
<!--                    <p>Click <a href="./index.html">here</a> to go back</p>-->
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer"><!--Footer-->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="companyinfo">
                                <h2><span><img src="images/home/Logo.PNG" alt="ImageGrove" /></span></h2>
                                <p>The home for all your images</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="address">
                                <img src="images/home/map.png" alt="" />
                                <p>1600 Holloway, San Francisco</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--		<div class="footer-widget">
                                    <div class="container">
                                            <div class="row">
                                                    <div class="col-sm-2">
                                                            <div class="single-widget">
                                                                    <h2>Service</h2>
                                                                    <ul class="nav nav-pills nav-stacked">
                                                                            <li><a href="">Online Help</a></li>
                                                                            <li><a href="">Contact Us</a></li>
                                                                            <li><a href="">Order Status</a></li>
                                                                            <li><a href="">Change Location</a></li>
                                                                            <li><a href="">FAQ’s</a></li>
                                                                    </ul>
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                            <div class="single-widget">
                                                                    <h2>Quock Shop</h2>
                                                                    <ul class="nav nav-pills nav-stacked">
                                                                            <li><a href="">T-Shirt</a></li>
                                                                            <li><a href="">Mens</a></li>
                                                                            <li><a href="">Womens</a></li>
                                                                            <li><a href="">Gift Cards</a></li>
                                                                            <li><a href="">Shoes</a></li>
                                                                    </ul>
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                            <div class="single-widget">
                                                                    <h2>Policies</h2>
                                                                    <ul class="nav nav-pills nav-stacked">
                                                                            <li><a href="">Terms of Use</a></li>
                                                                            <li><a href="">Privecy Policy</a></li>
                                                                            <li><a href="">Refund Policy</a></li>
                                                                            <li><a href="">Billing System</a></li>
                                                                            <li><a href="">Ticket System</a></li>
                                                                    </ul>
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                            <div class="single-widget">
                                                                    <h2>About Shopper</h2>
                                                                    <ul class="nav nav-pills nav-stacked">
                                                                            <li><a href="">Company Information</a></li>
                                                                            <li><a href="">Careers</a></li>
                                                                            <li><a href="">Store Location</a></li>
                                                                            <li><a href="">Affillate Program</a></li>
                                                                            <li><a href="">Copyright</a></li>
                                                                    </ul>
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-3 col-sm-offset-1">
                                                            <div class="single-widget">
                                                                    <h2>About Shopper</h2>
                                                                    <form action="#" class="searchform">
                                                                            <input type="text" placeholder="Your email address" />
                                                                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                                                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                                                                    </form>
                                                            </div>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>-->

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2016 Image Grove. All rights reserved.</p>
                    </div>
                </div>
            </div>

        </footer><!--/Footer-->



        <script src="js/jquery.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
        <script>
            function purchaseAlert() {
                alert("Thank you for purchasing.");
            }
        </script>
    </body>
</html>