<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './includes/head.php'; ?>
        <title>Search Results</title>
    </head>
    <!--/head-->
    <!-- sam made a comment -->
    <body>
        <?php include './includes/header.php'; ?>
        <section>
            <div class="container">
                <section id="search-box" >
                    <!--search-box-->
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
                </section>
                <!--/searchbox-->
                <?php
                $search_string = $_GET['search_string'];

                // Connect to the database
//              $dbLink = new mysqli('sfsuswe.com', 's16g07', 'team7db', 'student_s16g07');
                $dbLink = new mysqli('sfsuswe.com', 'earaujo', 'swes2016db', 'student_earaujo');
                if (mysqli_connect_errno()) {
                    die("MySQL connection failed: " . mysqli_connect_error());
                }
                $search_string = mysqli_real_escape_string($dbLink, $search_string);

                // Query for a list of all existing files
                $sql = "SELECT id, description, imageTitle FROM `file` WHERE description LIKE '%{$search_string}%'";

//              $sql = "SELECT Media_id, Description, Title FROM `Media_Metadata` WHERE Description LIKE '%{$search_string}%'";
                $result = $dbLink->query($sql);
                ?>
                <br>
                <div class="row">
                    <div class="col-sm-12 padding-right">
                        <div class="features_items">
                            <!-- Search Results Title -->
                            <h2 class="title text-center"><?php
                                echo $result->num_rows;
                                if ($result->num_rows == 1) {
                                    echo " Result ";
                                } else {
                                    echo " Results ";
                                } echo "for \"" . $_GET['search_string'] . "\"";
                                ?></h2>

                            <?php
                            // Check if db query was successfull
                            if ($result) {
                                // Make sure there are some files in there
                                if ($result->num_rows == 0) {
                                    echo '<div class="col-sm-8 col-sm-offset-3"><h3>There are no matches for your search in the database</h3></div>';
                                } else {
                                    // Display each file
                                    while ($row = $result->fetch_assoc()) {
                                        //if (strripos($row['description'], $search_string) !== false) {
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
                                                            <a class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>BUY</button></a>
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
                                //}
                                //Free the result
                                $result->free();
                            } else {
                                echo '<br/>Error! SQL query failed:';
                                echo "<pre>{$dbLink->error}</pre>";
                            }
                            // Close the mysql connection
                            $dbLink->close();
                            ?>
                        </div>
                        <!--features_items-->
                        <br />
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Thank you for your interest in this image!</h4>
                        </div>
                        <div class="modal-body">
                            <h5>To complete your purchase please call us at (###) ###-####.</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <footer id="footer">
            <!--Footer-->
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
        </footer>
        <!--/Footer-->
        <script src="js/jquery.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
