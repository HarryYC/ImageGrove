<!DOCTYPE HTML>

<!--code review 5/6/2016: Name of the file needs to be changed to reflect the functionality-->
<html>
    <?php
    $page_title = "Search Results";
    include("./includes/head.php");
    include("./app/controllers/SearchResultsController.php");
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    };
    $result_limit = 8;
    $start_from = ($page - 1) * $result_limit;
    ?>
    <!--code review 5/6/2016: style tags should be moved to main css file-->
    <!-- As per code review(5/6/16): CSS moved to compare-modal.css -->
    <link rel="stylesheet" type="text/css" href="css/compare-modal.css">
    <link rel="stylesheet" type="text/css" href="css/hover_effects.css">
    <body>
        <?php
        $home_page = "false";
        include("./includes/header.php");
        if (!isset($_GET['search_string'])) {
            $searchResults = SearchResultsController::browseAll();
        } else {
            $searchResults = SearchResultsController::searchResults($_GET['search_string']);
        }
        $totalNumOfResults = count($searchResults);

        $currentPageResults = SearchResultsController::currentPage($_GET['search_string'], $start_from, $result_limit);
        $numOfResults = count($currentPageResults);
        $total_pages = ceil($totalNumOfResults / $result_limit);
        $prevPage = ($page > 1) ? $page - 1 : $page;
        $nextPage = ($page < $total_pages) ? $page + 1 : $page;
        ?>

        <!--Code review:5/6/2016 :dead tag should be closed or removed-->
        <!-- As per code review (5/6/16): removed dead tag -->
        <div class="col-md-2 stock_left">
            <button class="accordion">Compare</button>
            <div class="panel">
                <?php
                echo "<br />Select <b>two</b> images to compare: </ br>"
                . "<form name='compare' id='compare' action='./image-Compare.php' method='GET'>";
                for ($i = 0; $i < $totalNumOfResults; $i++) {
                    echo ucfirst($searchResults[$i]->getTitle())
                    . ": <input class='single-checkbox' style='float: right;' id='chkbox' type='checkbox' name='compare[]' value={$searchResults[$i]->getMediaId()} onclick='chkcontrol({$i});' /></br>";
                }
                echo "<br /><button style='margin:15px 0 0 0; padding: 6px 18px;' class='btn_3' id='submitBtn' type='submit'>Compare</button></form>";
                ?>
            </div>
        </div>
        <div class="col-md-10 sap_tabs" style="padding-right: 50px;">   
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <h2 class="resp-tab-item" aria-controls="tab_item-0" role="tab">
                        <?php
                        echo "Showing<br>";
                        echo $start_from + 1;
                        echo "-";
                        echo $start_from + $numOfResults;
                        echo " of " . $totalNumOfResults;
                        $result = ($numOfResults == 1) ? " Result " : " Results ";
                        echo $result;
                        if (isset($_GET['search_string'])) {
                            echo " for \"" . $_GET['search_string'] . "\"";
                        }
                        ?></h2>

                    <div class="clearfix"></div>
                </ul>
                <!-- PAGINATION -->
                <?php
                echo "<div class='col-sm-6 col-sm-offset-3'>"
                . "<ul class='pagination'>";
                echo "<li><a href='?search_string=" . $_GET['search_string'] . "&page=" . $prevPage . "'>Previous</a></li>";
                for ($i = 1; $i <= $total_pages; $i++) {
                    $class = ($page == $i) ? "active" : "";
                    echo "<li class='" . $class . "'><a href='?search_string=" . $_GET['search_string'] . "&page=" . $i . "'> " . $i . " </a></li>";
                }
                echo "<li><a href='?search_string=" . $_GET['search_string'] . "&page=" . $nextPage . "'>Next</a></li>";
                echo "</ul></div>";
                ?>
                <!-- END PAGINATION -->
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                        <ul class="tab_img">
                            <?php
                            if ($numOfResults > 0) {
                                for ($i = 0; $i < count($currentPageResults); $i++) {
                                    list($price, $type) = SearchResultsController::findLowestPrice($currentPageResults[$i]);
                                    echo "<li>"
                                    ."<div class='hovereffect'>"
                                    .   "<img src='./PHP/get.php?id={$currentPageResults[$i]->getMediaId()}&type=ThumbNail' class='img-responsive' alt='' style='width:200px;height:150px;'>
                                        <div class='overlay'><a class='info' href='./product-details.php?image_id={$currentPageResults[$i]->getMediaId()}&search_string={$_GET['search_string']}&page={$page}'>More info</a>    
                                        </div>
                                    </div>
                                    <div class='tab_desc'>
                                    <br>
                                    <p>" . ucfirst($currentPageResults[$i]->getTitle()) . "</p>
                                    <h4>ID#{$currentPageResults[$i]->getMediaId()}</h4>
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
                <!-- PAGINATION -->
                <?php
                echo "<div class='col-sm-6 col-sm-offset-3'>"
                . "<ul class='pagination'>";
                echo "<li><a href='?search_string=" . $_GET['search_string'] . "&page=" . $prevPage . "'>Previous</a></li>";
                for ($i = 1; $i <= $total_pages; $i++) {
                    $class = ($page == $i) ? "active" : "";
                    echo "<li class='" . $class . "'><a href='?search_string=" . $_GET['search_string'] . "&page=" . $i . "'> " . $i . " </a></li>";
                }
                echo "<li><a href='?search_string=" . $_GET['search_string'] . "&page=" . $nextPage . "'>Next</a></li>";
                echo "</ul></div>";
                ?>
                <!-- END PAGINATION -->
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--Code review:5/6/2016 :Probably it is a good idea to move js functions to separate file-->
        <?php include("./includes/footer.php"); ?>
        <!-- As per code review (5/6/16): Moved javascript into separate file -->
        <script type="text/javascript" src="js/search-results/compareButton.js"></script>
    </body>
</html>     