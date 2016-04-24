<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
  <?php 
      $page_title = "Home";
      include("./includes/head.php");
  ?>
    <body>
    <?php include("./includes/header.php"); ?>
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
                            <li id="options">
                                <a href="#">All Images</a>
                                <ul class="subnav">
                                    <li><a href="#">Images</a></li>
                                    <li><a href="#">Video</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="grid_2" style="padding-top: 160px;">
            <div class="container"> 
                <div class="col-md-3 col_2">
                    <h3>Stock Photo<br>Categories</h3>
                </div>
                <div class="col-md-9 col_5">
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Abstract">Abstract</a></li>
                            <li><a href="./stock.php?search_string=Animals">Animals</a></li>
                            <li><a href="./stock.php?search_string=Arts">The Arts</a></li>
                            <li><a href="./stock.php?search_string=Textures">Textures</a></li>
                            <li><a href="./stock.php?search_string=Fashion">Fashion</a></li>
                            <li><a href="./stock.php?search_string=Landmarks">Landmarks</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Business">Business</a></li>
                            <li><a href="./stock.php?search_string=Celebrities">Celebrities</a></li>
                            <li><a href="./stock.php?search_string=Editorial">Editorial</a></li>
                            <li><a href="./stock.php?search_string=Education">Education</a></li>
                            <li><a href="./stock.php?search_string=Food">Food</a></li>
                            <li><a href="./stock.php?search_string=Healthcare">Healthcare</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Holidays">Holidays</a></li>
                            <li><a href="./stock.php?search_string=Illustrations">Illustrations</a></li>
                            <li><a href="./stock.php?search_string=Industrial">Industrial</a></li>
                            <li><a href="./stock.php?search_string=Interiors">Interiors</a></li>
                            <li><a href="./stock.php?search_string=Miscellaneous">Miscellaneous</a></li>
                            <li><a href="./stock.php?search_string=Model">Model</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Nature">Nature</a></li>
                            <li><a href="./stock.php?search_string=Objects">Objects</a></li>
                            <li><a href="./stock.php?search_string=Parks">Parks</a></li>
                            <li><a href="./stock.php?search_string=People">People</a></li>
                            <li><a href="./stock.php?search_string=Religion">Religion</a></li>
                            <li><a href="./stock.php?search_string=Science">Science</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
      <?php include("./includes/footer.php");?>
    </body>
</html>		