<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta stuff from portfolio BS template -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap Core CSS -->
        <link href="css/portfolio-css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/portfolio-css/portfolio-item.css" rel="stylesheet">

        <?php include './includes/head.php'; ?>
        <title>Product Details</title>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <!--/head-->
    <body>
        <?php
        $home_page = "false";
        include("./includes/header.php");
        ?>

        <!-- Navigation -->

        <!-- Page Content -->
        <div class="container">

            <!-- Portfolio Item Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Portfolio Item
                        <small>Item Subheading</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <!-- Portfolio Item Row -->
            <div class="row">

                <div class="col-md-8">
                    <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                </div>

                <div class="col-md-4">
                    <h3>Project Description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                    <h3>Project Details</h3>
                    <ul>
                        <li>Lorem Ipsum</li>
                        <li>Dolor Sit Amet</li>
                        <li>Consectetur</li>
                        <li>Adipiscing Elit</li>
                    </ul>
                </div>

            </div>
            <!-- /.row -->

            <!-- Related Projects Row -->
            <div class="row">

                <div class="col-lg-10">
                    <h3 class="page-header">More by Artist</h3>
                </div>

                <?php
                //  generate a grid of images
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j < 4; $j++) {
                        $imgSrc = "http://placehold.it/500x300";
                        echo "<div class=\"col-sm-3 col-xs-6\"><a href=\"#\">";
                        echo "<img class=\"img-responsive portfolio-item\" src=" . $imgSrc . " alt=\"\">";
                        echo "</a></div>";
                    }
                    echo "<br>";
                }
                ?>
                <div class="col-sm-2 imageControlsAndShare" style="white-space: nowrap; width: 2%;">
                    <i data-toggle="tooltip" title="Zoom In" class="fa fa-plus-square fa-3x wow bounceIn"></i><br>
                    <i data-toggle="tooltip" title="Zoom Out" class="fa fa-minus-square fa-3x wow bounceIn"></i><br>
                    <i data-toggle="tooltip" title="Share on Facebook" class="fa fa-facebook-square fa-3x wow bounceIn"></i><br>
                    <i data-toggle="tooltip" title="Share on Twitter" class="fa fa-twitter-square fa-3x wow bounceIn"></i><br>
                    <i data-toggle="tooltip" title="Share on Pinterest" class="fa fa-pinterest-square fa-3x wow bounceIn"></i><br>
                    <i data-toggle="tooltip" title="Save to Favorites" class="fa fa-heart fa-3x wow bounceIn"></i><br>
                </div>

            </div>
            <!-- /.row -->

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
                <!-- /.row -->
            </footer>

        </div>
        <!-- /.container -->


        <!-- Bootstrap Core JavaScript -->
        <script src="js/portfolio-js/bootstrap.min.js"></script>
    </body>
</html>