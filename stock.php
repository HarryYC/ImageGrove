<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <?php
    $page_title = "Search Results";
    include("./includes/head.php");
    include("./ProductInfoClass.php");

    $productInfo = new ProductInfo();
    $searchResults = $productInfo->getAllProductsByKeyword($_GET['search_string']);
    $numOfResults = count($searchResults);
    ?>
    <body>
        <?php
        $home_page = "false";
        include("./includes/header.php");
        ?>
        <div class="stock_box">
            <div class="col-md-2 stock_left">
                <div class="w_sidebar">
                    <section class="sky-form">
                        <h4>Collections</h4>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All images</label>
                        </div><div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Standard</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Following</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Lorem Ipsum</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Injected humour</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Default model </label>
                        </div>
                    </section>
                    <section class="sky-form">
                        <h4>Freshness</h4>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Any time</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Past 3 months</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Past month</label>
                        </div><div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Past week</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Past 3 days</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Any time</label>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-10 sap_tabs">    
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <?php
//                    $search_string = $_GET['search_string'];
//
//                    // Connect to the database
////              $dbLink = new mysqli('sfsuswe.com', 's16g07', 'team7db', 'student_s16g07');
//                    $dbLink = new mysqli('sfsuswe.com', 'earaujo', 'swes2016db', 'student_earaujo');
//                    if (mysqli_connect_errno()) {
//                        die("MySQL connection failed: " . mysqli_connect_error());
//                    }
//                    $search_string = mysqli_real_escape_string($dbLink, $search_string);
//
//                    // Query for a list of all existing files
//                    $sql = "SELECT id, description, imageTitle FROM `file` WHERE description LIKE '%{$search_string}%'";
//
////              $sql = "SELECT Media_id, Description, Title FROM `Media_Metadata` WHERE Description LIKE '%{$search_string}%'";
//                    $result = $dbLink->query($sql);
                    ?>
                    <ul class="resp-tabs-list">
                        <h2 class="resp-tab-item" aria-controls="tab_item-0" role="tab">
                            <?php
                            echo $numOfResults;
                            if ($numOfResults == 1) {
                                echo " Result ";
                            } else {
                                echo " Results ";
                            } echo "for \"" . $_GET['search_string'] . "\"";
                            ?></h2>
                        <div class="clearfix"></div>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            <ul class="tab_img">

                                <?php
                                // Check if db query was successfull
//                                if ($result) {
//                                    // Make sure there are some files in there
//                                    if ($result->num_rows == 0) {
//                                        echo '<div class="col-sm-8 col-sm-offset-3"><h3>There are no matches for your search in the database</h3></div>';
//                                    } else {
//                                        // Display each file
//                                while ($row = $result->fetch_assoc()) {
                                //if (strripos($row['description'], $search_string) !== false) {
                                if ($numOfResults > 0) {

                                    for ($i = 0; $i < count($searchResults); $i++) {
                                        
                                        echo "
                                            <li><form id='product_details' action='./single.php' method='GET'>
                                                <input type='hidden' name='image_title' value='{$searchResults[$i]->getTitle()}'/>
                                                <button type='submit' style='padding: 0; border: 0;' name='image_id' value='{$searchResults[$i]->getMediaId()}'>"
                                                . "<img src='./PHP/get.php?id={$searchResults[$i]->getMediaId()}&type=ThumbNail' class='img-responsive' alt='' style='width:200px;height:150px;'>
                                                </button>
                                                <div class='tab_desc'>
                                                    <p>{$searchResults[$i]->getTitle()}</p>
                                                    <h4>id#{$searchResults[$i]->getMediaId()}</h4>
                                                </div>
                                            </form></li>";
                                    }
                                } else {
                                    echo "<div align='center'><h3>Sorry, no results found, try another search!</h3></div>";
                                }
                                //}
                                //}
                                //Free the result
                                //$result->free();
//                                } else {
//                                    echo '<br/>Error! SQL query failed:';
//                                    echo "<pre>{$dbLink->error}</pre>";
//                                }
                                // Close the mysql connection
                                //$dbLink->close();
                                $productInfo->closeDBConnection();
                                ?>
                                <div class="clearfix"></div>
                            </ul>
                        </div>                                                                   
                    </div>  
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

        <?php include("./includes/footer.php"); ?>
    </body>
</html>     