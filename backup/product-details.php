<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Product Details</title>
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
                                            <li><a href="ArtistPortfolio.html">Artist</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./contact-us.html"><i class="fa fa-envelope"></i>Mail</a></li>

                                    <li><a href="./login.html"><i class="fa fa-lock"></i> Login</a></li>
                                    <!--<li><a href="./login.html"><i class="fa fa-sign-out"></i> LogOut</a></li>-->

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
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Category</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Animals
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="sportswear" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Dogs </a></li>
                                                <li><a href="#">Cats </a></li>
                                                <li><a href="#">Hedgehogs </a></li>
                                                <li><a href="#">Cows</a></li>
                                                <li><a href="#">Koala </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Outdoors
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="mens" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Landscape</a></li>
                                                <li><a href="#">Sky</a></li>
                                                <li><a href="#">Clouds</a></li>
                                                <li><a href="#">Trees</a></li>
                                                <li><a href="#">Sea</a></li>
                                                <li><a href="#">Sunset</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Most Popular
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="womens" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Red</a></li>
                                                <li><a href="#">White</a></li>
                                                <li><a href="#">Blue</a></li>
                                                <li><a href="#">Flowers</a></li>
                                                <li><a href="#">Night</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Art</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Snow</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Sun</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Portrait</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Green</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Light</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Park</a></h4>
                                    </div>
                                </div>
                            </div><!--/category-productsr-->

                            <div class="brands_products"><!--brands_products-->
                                <h2>Artists </h2>
                                <div class="brands-name">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#"> <span class="pull-right">(50)</span>Sam </a></li>
                                        <li><a href="#"> <span class="pull-right">(56)</span>Eddie </a></li>
                                        <li><a href="#"> <span class="pull-right">(27)</span>Meg </a></li>
                                        <li><a href="#"> <span class="pull-right">(32)</span>Harry</a></li>
                                        <li><a href="#"> <span class="pull-right">(5)</span>Marisa</a></li>
                                    </ul>
                                </div>
                            </div><!--/brands_products-->

                            <div class="price-range"><!--price-range-->
                                <h2>Price Range</h2>
                                <div class="well">
                                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                    <b>$ 0</b> <b class="pull-right">$ 600</b>
                                </div>
                            </div><!--/price-range-->
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="product-details"><!--product-details-->
                            <div class="col-sm-7">
                                <div class="view-product">
                                    <?php echo "<img src='./PHP/get.php?id={$_GET['image_id']}&type=medium' />" ?>
                                </div>
                            </div>
                            <div class="col-sm-2 imageControlsAndShare" style="white-space: nowrap; width: 2%;">
                                <i data-toggle="tooltip" title="Zoom In" class="fa fa-plus-square fa-3x wow bounceIn"></i><br>
                                <i data-toggle="tooltip" title="Zoom Out" class="fa fa-minus-square fa-3x wow bounceIn"></i><br>
                                <i data-toggle="tooltip" title="Share on Facebook" class="fa fa-facebook-square fa-3x wow bounceIn"></i><br>
                                <i data-toggle="tooltip" title="Share on Twitter" class="fa fa-twitter-square fa-3x wow bounceIn"></i><br>
                                <i data-toggle="tooltip" title="Share on Pinterest" class="fa fa-pinterest-square fa-3x wow bounceIn"></i><br>
                                <i data-toggle="tooltip" title="Save to Favorites" class="fa fa-heart fa-3x wow bounceIn"></i><br>
                            </div>
                        </div><!--/product-details-->

                        <div class="container">
                            <div class="row">
                                <span>
                                    <span>US $59</span> 
                                    <button type="button" class="btn btn-fefault cart" onclick='buyAlert()'>
                                        <i class="fa fa-shopping-cart"></i>
                                        Buy
                                    </button>
                                </span>                                
                            </div>
                            <div class="row">
                                <div class="col-sm-4 artInfoHeader">
                                    <div class="artistPortrait">
                                        <!-- programmatically get artist image out of db -->
                                        <?php echo "<img src=\"images/hardcode/pamartist.JPG\" height=\"50\" width=\"50\" />" ?>
                                    </div>
                                    <div class="artInfo">
                                        <!-- dynamic data for title of piece, artist info, etc... -->
                                        <div><?php echo "{$_GET['image_title']}" ?></div>
                                        <div><?php echo "by Artist Name here" ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="padding: 12px">
                                    <p>Web ID: <?php echo "{$_GET['image_id']}" ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div style="padding: 12px">
                                    <p><?php echo "put description here" ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div style="padding: 12px">
                                    <p><?php echo "put metadata here" ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="category-tab shop-details-tab"><!--category-tab-->
                            <!--    Disable tabs and content to conform to mocks. This is the details/artist profile section beneath the image
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li><a href="#details" data-toggle="tab">Details</a></li>
                                    <li><a href="#companyprofile" data-toggle="tab">Artist Profile</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade" id="details" >
                                </div>
    
                                <div class="tab-pane fade" id="companyprofile" >
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/gallery1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Buy</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div> <!-- end of tabs section-->
                        </div><!--/category-tab-->

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
                                <p style="padding-left:20px;">The solution to all your image needs</p>
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
            function buyAlert() {
                alert("Please contact us via the Contact link above to put in an order for this item.");
            }
        </script>
    </body>
</html>