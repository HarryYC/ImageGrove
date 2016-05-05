<!DOCTYPE html>
<html lang="en">
    <!-- head includes -->
    <?php
    $page_title = "Artist";
    include("./includes/head.php");
    include("app/views/artistProfile/bigPictureView.php");
    include("app/views/artistProfile/imageGridView.php");
    include("app/views/artistProfile/getArtistInfo.php");
    ?> 

    <body>
        <!-- includes header bar with logo, search, register/login etc...-->
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
                    <h1 class="page-header" style="margin: 80px 0 20px;">
                        <?php echo getArtistName(); ?>
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <!-- Portfolio Item Row -->
            <div class="row">
                <div class="col-md-8">
                    <?php
                    echo getBigPicture();
                    ?>
                </div>

                <div class="col-md-4">
                  
                    <?php
                    // Trigger the modal with a button
                    include("app/views/artistProfile/uploadButton.php");
                    //  code to show modal
                    include("app/views/artistProfile/uploadModalView.php");
                    ?>


                    <h3>Artist Description</h3>
                    <p>
                        <?php echo getArtistDesc(); ?>
                    </p>
                    <h3>Artist Focus</h3>
                    <ul>
                        <li>People</li>
                        <li>Food</li>
                        <li>Pets</li>
                        <li>Special Occasions</li>
                    </ul>
                </div>

            </div>
            <!-- /.row -->

            <!-- Related Projects Row -->
            <div class="row">

                <div class="col-lg-10">
                    <h3 class="page-header">More by <?php echo getArtistName(); ?></h3>
                </div>

                <?php
                //  generate a grid of images
                echo generateArtistImageGrid();
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
        </div>
        <!-- /.container -->
        <?php include './includes/footer.php'; ?>
    </body>
</html>