<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <?php
    $page_title = "Browse All";
    include("./includes/head.php");
    include("./SearchResultsController.php");
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
                            $searchResults = SearchResultsController::browseAll();
                            $numOfResults = count($searchResults);
                            echo 'Browsing ' . $numOfResults . ' Products';
                            ?></h2>
                        <div class="clearfix"></div>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            <ul class="tab_img">
                                <?php
                                if (($numOfResults > 0) && ($numOfResults < 16)){
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