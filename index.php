<!DOCTYPE HTML>
<html>
    <?php $page_title = "Home"; include("./includes/head.php"); ?>
    <body>
    <?php  $home_page = "true"; include("./includes/header.php"); ?>
        <div class="banner">
            <div class="container">
                <div class="span_1_of_1">
                    <h2 style="text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;">Media from <br> artists all over the world.</h2>
                    <div class="search">
                        <ul class="nav1">
                            <li id="search">
                                <form action="./stock.php" method="get">
                                    <input type="text" name="search_string" id="search_text" placeholder="Search"/>
                                    <input type="button" name="search_button" id="search_button">
                                </form>
                            </li>
<!--                            <li id="options">
                                <a href="#">All Images</a>
                                <ul class="subnav">
                                    <li><a href="#">Images</a></li>
                                    <li><a href="#">Video</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
      <?php include("./includes/footer.php");?>
    </body>
</html>		