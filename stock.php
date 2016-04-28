<!DOCTYPE HTML>
<html>
    <?php
    $page_title = "Search Results";
    include("./includes/head.php");
    include("./app/controllers/SearchResultsController.php");
    ?>
    <body>
        <?php
        $home_page = "false";
        include("./includes/header.php");
        ?>
        <div class="stock_box">
            <div class="col-md-2 stock_left">
                <!--<div class="w_sidebar">
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
                </div>-->
            </div>
            <div class="col-md-10 sap_tabs">    
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <h2 class="resp-tab-item" aria-controls="tab_item-0" role="tab">
                            <?php
                            $searchResults = SearchResultsController::searchResults($_GET['search_string']);
                            $numOfResults = count($searchResults);

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
                                                    <p>Price: " . SearchResultsController::findLowestPrice($searchResults[$i]) . "
                                                </div>
                                            </form></li>";
                                    }
                                } else {
                                    echo "<div align='center'><h3>Sorry, no results found, try another search!</h3></div>";
                                }
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