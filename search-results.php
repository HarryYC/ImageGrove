<!DOCTYPE HTML>

<!--code review 5/6/2016: Name of the file needs to be changed to reflect the functionality-->
<html>
    <?php
    $page_title = "Search Results";
    include("./includes/head.php");
    include("./app/controllers/SearchResultsController.php");
    ?>
    <!--code review 5/6/2016: style tags should be moved to main css file-->
    <!-- As per code review(5/6/16): CSS moved to compare-modal.css -->
    <link rel="stylesheet" type="text/css" href="css/compare-modal.css">
    <body>
        <?php
        $home_page = "false";
        include("./includes/header.php");
        if (!isset($_GET['search_string'])){
            $searchResults = SearchResultsController::browseAll();
        }
        else {
            $searchResults = SearchResultsController::searchResults($_GET['search_string']);
        }
        $numOfResults = count($searchResults);
        ?>
        <!--Code review:5/6/2016 :dead tag should be closed or removed-->
        <!-- As per code review (5/6/16): removed dead tag -->
            <div class="col-md-2 stock_left">
                <button class="accordion">Compare</button>
                <div class="panel">
                    <?php
                    echo "<br />Select <b>two</b> images to compare: </ br>"
                    . "<form name='compare' id='compare' action='./image-Compare.php' method='GET'>";
                    for ($i = 0; $i < count($searchResults); $i++) {
                        echo ucfirst($searchResults[$i]->getTitle())
                        . ": <input class='single-checkbox' type='checkbox' name='compare[]' value={$searchResults[$i]->getMediaId()} onclick='chkcontrol({$i});' /></br>";
                    }
                    echo "<br /><button style='margin:15px 0 0 0; padding: 6px 18px;' class='btn_3'disabled='disabled' id='submitBtn' type='submit'>Compare</button></form>";
                    ?>
                </div>
            </div>
            <div class="col-md-10 sap_tabs" style="padding-right: 30px;">    
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <h2 class="resp-tab-item" aria-controls="tab_item-0" role="tab">
                            <?php
                            echo $numOfResults;
                            if ($numOfResults == 1) {
                                echo " Result ";
                            } else {
                                echo " Results ";
                            } 
                            if (isset($_GET['search_string'])){
                                echo "for \"" . $_GET['search_string'] . "\"";
                            }
                            ?></h2>

                        <div class="clearfix"></div>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            <ul class="tab_img">
                                <?php
                                if ($numOfResults > 0) {
                                    for ($i = 0; $i < count($searchResults); $i++) {
                                        list($price, $type) = SearchResultsController::findLowestPrice($searchResults[$i]);
                                        echo "
                                            <li><form id='product_details' action='./product-details.php' method='GET'>
                                                <input type='hidden' name='image_title' value='{$searchResults[$i]->getTitle()}'/>
                                                <input type='hidden' name='search_string' value='{$_GET['search_string']}'/>
                                                <button type='submit' style='padding: 0; border: 0;' name='image_id' value='{$searchResults[$i]->getMediaId()}'>"
                                        . "<img src='./PHP/get.php?id={$searchResults[$i]->getMediaId()}&type=ThumbNail' class='img-responsive' alt='' style='width:200px;height:150px;'>
                                                </button>
                                                </form>
                                                <div class='tab_desc'>
                                                    <p>" . ucfirst($searchResults[$i]->getTitle()) . "</p>
                                                    <h4>ID#{$searchResults[$i]->getMediaId()}</h4>
                                                    <p>Price: " . $price . " (" . $type . ")</p>
                                                    <br><button style='margin:15px 0 0 0; padding: 6px 18px;' type='button' class='btn_3' data-toggle='modal' data-target='#buyModal'>Buy</button>
                                                </div>
                                            </li>";
                                    }
                                } else {
                                    echo "<div class='col-sm-6 col-sm-offset-2'><h3>Sorry, no results found, try another search!</h3></div>";
                                }
                                ?>
                                <div class="clearfix"></div>
                            </ul>
                            <?php
                            include("app/views/imageDetails/buyModal.php");
                            ?>                                                                   
                        </div>  
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
           <!--Code review:5/6/2016 :Probably it is a good idea to move js functions to separate file-->
            <?php include("./includes/footer.php"); ?>
           <!-- As per code review (5/6/16): Moved javascript into separate file -->
            <script type="text/javascript" src="js/search-results/compareButton.js"></script>
    </body>
</html>     