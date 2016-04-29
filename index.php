<!DOCTYPE HTML>
<html>
    <?php $page_title = "Home"; include("./includes/head.php"); ?>
    <body>
    <?php  $home_page = "true"; include("./includes/header.php"); ?>
        <div class="banner">
            <div class="container">
                <div class="span_1_of_1">
                    <!--<h2 style="text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;"><br>Seach For Media Here</h2>-->
                    <div class="search" style="margin-top: 100px;">
                        <ul class="nav1" style="margin-bottom: 0px;">
                            <li id="search">
                                <form action="./stock.php" method="get">
                                    <input type="text" name="search_string" id="search_text" placeholder="Search for Images" />
                                    <input type="button" name="search_button" id="search_button">
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="grid_1">
            <h3>Many Categories to Choose From</h3>
            <div class="col-md-2 col_1">
                <h4>Food</h4>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/f1.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/pic9.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/f2.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/f3.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/f4.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <h4>People</h4>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/pic20.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/pic21.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/pic22.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/pic23.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/pic24.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="clearfix"> </div>
        </div>
        
      <?php include("./includes/footer.php");?>
    </body>
</html>		