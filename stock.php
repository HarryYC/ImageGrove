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
                                            <li><form id='product_details' action='./product-details.php' method='GET'>
                                                <input type='hidden' name='image_title' value='{$searchResults[$i]->getTitle()}'/>
                                                <input type='hidden' name='search_string' value='{$_GET['search_string']}'/>
                                                <button type='submit' style='padding: 0; border: 0;' name='image_id' value='{$searchResults[$i]->getMediaId()}'>"
                                        . "<img src='./PHP/get.php?id={$searchResults[$i]->getMediaId()}&type=ThumbNail' class='img-responsive' alt='' style='width:200px;height:150px;'>
                                                </button>
                                                <div class='tab_desc'>
                                                    <p>". ucfirst($searchResults[$i]->getTitle()) . "</p>
                                                    <h4>ID#{$searchResults[$i]->getMediaId()}</h4>
                                                    <p>Price: " . SearchResultsController::findLowestPrice($searchResults[$i]) . "</p>
                                                    <br><button style='margin:15px 0 0 0; padding: 6px 18px;' type='button' class='btn_3' data-toggle='modal' data-target='#buyModal'>Buy</button>
                                                </div>
                                            </form></li>";
                                    }
                                } else {
                                    echo "<div align='center'><h3>Sorry, no results found, try another search!</h3></div>";
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

            <?php include("./includes/footer.php"); ?>
    </body>
</html>     