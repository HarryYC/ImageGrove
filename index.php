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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="grid_1">
            <h3>Over 42 Million Images To Choose From</h3>
            <div class="col-md-2 col_1">
                <h4>Gym</h4>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/g1.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/g2.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/g3.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/g4.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/g5.jpg" class="img-responsive" alt=""/>
            </div>
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
                <h4>Wedding</h4>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/w1.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/pic15.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/w2.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/w3.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-2 col_1">
                <img src="images/w4.jpg" class="img-responsive" alt=""/>
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