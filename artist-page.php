<!DOCTYPE html>
<html lang="en">
    <!-- head includes -->
    <?php
    $page_title = "Artist";
    include("./includes/head.php");
    include("app/views/artistProfile/bigPictureView.php");
    include("app/views/artistProfile/imageGridView.php");
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
                    <h1 class="page-header" style="margin: 80px 0 20px;">Portfolio Item
                        <small>Item Subheading</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <!-- Portfolio Item Row -->
            <div class="row">

                <div class="col-md-8">
                    <?php
                    echo getArtistData();
                    ?>
                </div>

                <div class="col-md-4">
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: #3b5889; border-color: black;">Upload Image</button>

                    <?php
                    //  code to show modal
                    include("app/views/artistProfile/uploadModalView.php");
                    ?>


                    <h3>Artist Description</h3>
                    <p>This is the description of my art work in general and where I as an artist write about myself so that when user's look me up they can  
                        get an idea of who I am and what I do. This piece will be populated by the artist when they sign up for an account.</p>
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
                    <h3 class="page-header">More by Artist</h3>
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
    </body>
</html>